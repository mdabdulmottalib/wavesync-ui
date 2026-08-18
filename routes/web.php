<?php

use App\Events\ContactFormSubmitted;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/', function () {
    return view('public.home');
})->name('home');

// Individual service pages temporarily disabled — running without them for
// now. Route stays registered (name unchanged) purely so route('services.show', ...)
// calls elsewhere don't fatal error; every visit just 404s. Nothing below
// was deleted — uncomment the closure to bring the pages back.
Route::get('/services/{slug}', fn () => abort(404))->name('services.show');
// Route::get('/services/{slug}', function (string $slug) {
//     $services = collect(config('service_offerings.services'));
//     $service = $services->firstWhere('slug', $slug);
//
//     abort_unless($service, 404);
//
//     $relatedCaseStudies = collect(config('portfolio.case_studies'))
//         ->filter(fn (array $caseStudy) => in_array($caseStudy['category'], $service['portfolio_categories'], true))
//         ->values()
//         ->all();
//
//     return view('public.service', [
//         'service' => $service,
//         'otherServices' => $services->reject(fn (array $s) => $s['slug'] === $slug)->values()->all(),
//         'relatedCaseStudies' => $relatedCaseStudies,
//     ]);
// })->name('services.show');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/portfolio', function () {
    return view('public.portfolio', [
        'caseStudies' => config('portfolio.case_studies'),
    ]);
})->name('portfolio');

// Named 'contact.page' (not 'contact') so it doesn't collide with the
// POST /contact form-submit route below, which the contact form's fetch
// call looks up as route('contact').
Route::get('/contact', function () {
    return view('public.contact');
})->name('contact.page');

// Generated from the same routes/config as the rest of the site rather than
// a static file, so it can't go stale when a service slug changes. Service
// URLs left out while /services/{slug} 404s — no point telling crawlers to
// index pages that don't resolve. Restore the ->concat(...) below alongside
// the route closure above once single service pages are back.
Route::get('/sitemap.xml', function () {
    $urls = collect([
        ['loc' => route('home'), 'priority' => '1.0'],
        ['loc' => route('about'), 'priority' => '0.8'],
        ['loc' => route('portfolio'), 'priority' => '0.8'],
        ['loc' => route('contact.page'), 'priority' => '0.8'],
    ]);
    // ->concat(
    //     collect(config('service_offerings.services'))->map(fn (array $service) => [
    //         'loc' => route('services.show', $service['slug']),
    //         'priority' => '0.9',
    //     ]),
    // );

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'text/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow:\n\nSitemap: " . route('sitemap') . "\n")
        ->header('Content-Type', 'text/plain');
});

Route::post('/contact', function (Request $request) {
    try {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'budget_range' => 'nullable|string',
            'referral_source' => 'nullable|string',
            'message' => 'required|string',
            'service' => 'required|array|min:1',
        ]);

        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'budget_range' => $validated['budget_range'] ?? null,
            'referral_source' => $validated['referral_source'] ?? null,
            'message' => $validated['message'] ?? null,
            'service' => $validated['service'],
        ]);

        ContactFormSubmitted::dispatch($contact);

        return response()->noContent();
    } catch (ValidationException $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
            'errors' => $e->errors(),
        ], 422);
    } catch (Throwable $e) {
        report($e);

        return response()->json([
            'success' => false,
            'message' => 'Something went wrong. Please try again later.',
        ], 500);
    }
})->name('contact');

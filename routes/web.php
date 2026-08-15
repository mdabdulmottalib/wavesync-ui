<?php

use App\Events\ContactFormSubmitted;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/services/{slug}', function (string $slug) {
    $services = collect(config('service_offerings.services'));
    $service = $services->firstWhere('slug', $slug);

    abort_unless($service, 404);

    $relatedCaseStudies = collect(config('portfolio.case_studies'))
        ->filter(fn (array $caseStudy) => in_array($caseStudy['category'], $service['portfolio_categories'], true))
        ->values()
        ->all();

    return view('public.service', [
        'service' => $service,
        'otherServices' => $services->reject(fn (array $s) => $s['slug'] === $slug)->values()->all(),
        'relatedCaseStudies' => $relatedCaseStudies,
    ]);
})->name('services.show');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/portfolio', function () {
    return view('public.portfolio', [
        'caseStudies' => config('portfolio.case_studies'),
    ]);
})->name('portfolio');

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

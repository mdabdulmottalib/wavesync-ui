<x-mail::message>
# Hi {{ $contact->name }},

Thank you for contacting us. We've received your inquiry and our team is currently reviewing it.

<x-mail::panel>
<strong>What happens next</strong>

Our team will take a closer look at your inquiry and get back to you within 1 business day. If we need any further details to bring your project to life, we'll reach out by email.
</x-mail::panel>

In the meantime, feel free to reply to this email if you have any questions.

Thank you for considering **{{ config('app.name') }}** — we look forward to connecting with you soon.

<x-mail::button :url="config('app.url')">
Visit Our Website
</x-mail::button>

Best regards,
The {{ config('app.name') }} Team
</x-mail::message>
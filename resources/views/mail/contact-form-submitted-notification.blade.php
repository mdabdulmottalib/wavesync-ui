<x-mail::message>
# New Inquiry Received

You've received a new project inquiry through the website contact form. Details are below.

<x-mail::table>
| Field | Value |
|:------|:------|
| Name | {{ $contact->name ?: '—' }} |
| Email | {!! $contact->email ? \App\Support\MailHelper::breakAutoLink($contact->email) : '—' !!} |
| Services | {{ !empty($contact->service) ? implode(', ', $contact->service) : '—' }} |
| Budget | {{ $contact->budget_range ?: '—' }} |
| Referral | {{ $contact->referral_source ?: '—' }} |
</x-mail::table>

@if($contact->message)
<x-mail::panel>
<strong>Message</strong>

{{ $contact->message }}
</x-mail::panel>
@endif

Reply directly to this email to respond to {{ $contact->name }} — it's addressed from their inbox.

Thanks,<br />
{{ config('app.name') }}
</x-mail::message>
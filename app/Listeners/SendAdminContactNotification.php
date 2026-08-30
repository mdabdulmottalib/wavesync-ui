<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use App\Notifications\ContactFormSubmittedNotification;
use Illuminate\Support\Facades\Notification;

class SendAdminContactNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactFormSubmitted $event): void
    {
        Notification::route('mail', config('wavesync.contact_email'))
            ->notify(new ContactFormSubmittedNotification($event->contact));
    }
}

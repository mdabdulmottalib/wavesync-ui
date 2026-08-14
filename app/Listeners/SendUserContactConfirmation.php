<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use App\Notifications\ContactReceivedNotification;
use Illuminate\Support\Facades\Notification;

class SendUserContactConfirmation
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
        Notification::route(
            'mail',
            $event->contact->email
        )->notify(
            new ContactReceivedNotification($event->contact)
        );
    }
}

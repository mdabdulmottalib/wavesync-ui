<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactReceivedNotification extends Notification
{
    /**
     * Create a new notification instance.
     */
    public function __construct(
        public Contact $contact,
    ) {}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("We've Received Your Inquiry — Thank You for Reaching Out!")
            ->replyTo(config('wavesync.contact_email'), config('app.name'))
            ->markdown('mail.contact-received-notification', [
                'contact' => $this->contact,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

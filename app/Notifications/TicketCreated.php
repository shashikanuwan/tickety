<?php

namespace App\Notifications;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketCreated extends Notification
{
    use Queueable;

    public function __construct(public Ticket $ticket) {}

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Your Support Ticket Has Been Created 🎫')
            ->greeting('Hello '.$this->ticket->customer_name.',')
            ->line('Thank you for reaching out to our support team. Your request has been received, and we are working to assist you as soon as possible.')
            ->line('Here are your ticket details:')
            ->line('**📌 Ticket Reference Number:** *'.$this->ticket->reference_number.'*')
            ->line('You can use this reference number to track the status of your request.')
            ->action('Check Ticket Status', url('/?ref='.$this->ticket->reference_number))
            ->line('Our support team will review your request and get back to you shortly.')
            ->line('If you have any additional details to add, feel free to reply to this email.')
            ->salutation('Best regards, The Support Team');
    }
}

<?php

namespace App\Notifications;

use App\Models\Reply;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketReplied extends Notification
{
    use Queueable;

    public function __construct(public Reply $reply) {}

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Reply to Your Support Ticket 🎫')
            ->greeting('Hello '.$this->reply->ticket->customer_name.',')
            ->line('We have an update on your support ticket:')
            ->line('**📌 Ticket Reference Number:** *'.$this->reply->ticket->reference_number.'*')
            ->line('Here is the latest response:')
            ->line('**👤 Sender:** '.($this->reply->user->name ?? 'Support Team'))
            ->line('**📅 Date & Time:** '.$this->reply->created_at->format('F j, Y g:i A'))
            ->line('**💬 Message:**')
            ->line($this->reply->message)
            ->action('View Ticket', url('/?ref='.$this->reply->ticket->reference_number))
            ->line('If you need further assistance, feel free to reply to this email.')
            ->salutation('Best regards, The Support Team');
    }
}

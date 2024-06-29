<?php

namespace App\Notifications;

use App\Models\Community;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommunityInviteNotification extends Notification
{
    use Queueable;

    protected $community;

    public function __construct(Community $community)
    {
        $this->community = $community;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('You have been invited to join the community: ' . $this->community->name)
                    ->action('View Community', url('/communities/' . $this->community->id))
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'community_id' => $this->community->id,
            'community_name' => $this->community->name,
        ];
    }
}

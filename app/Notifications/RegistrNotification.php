<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class RegistrNotification extends Notification
{
    use Queueable;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Bonjour'.$this->user->name.'à notre
                    Nous espérons que vous profitez pleinement de notre site cvDZ.')
            ->action('Complétez votre CV', url('cvs'))
            ->line('Merci de utiliser notre application!');
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

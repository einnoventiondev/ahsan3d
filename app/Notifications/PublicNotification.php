<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;


class PublicNotification extends Notification
{
    use Queueable;

    public $user;
    public $pub;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$pub)
    {
       $this->user = $user;
       $this->pub = $pub;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Your account have been created successfuly');
                    // ->action('Notification Action', url('/'))
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'data' => $this->user->name,
            'msg' => 'New Public Request is Added',
            'pub_id'=> $this->pub->id,
            'med_id'=>null,
        ];
    }
}

<?php

namespace Domain\Users\Notifications;

use DB;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserInvitationNotification extends Notification
{
    public function __construct()
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via(mixed $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail(mixed $notifiable): MailMessage
    {
        $token = app('auth.password.broker')->createToken($notifiable);
        ;

        DB::table(config('auth.passwords.users.table'))->insert([
            'email' => $notifiable->email,
            'token' => $token
        ]);

        $resetUrl= url(config('app.url').route('password.reset', ['token'=>$token,'email' => $notifiable->email,'set'=> true], false));

        return (new MailMessage())
            ->subject("Bienvenue l'admin de ".config('app.name'))
            ->greeting("Bienvenue l'admin de ".config('app.name'))
            ->line('Vous pouvez vous connecter avec l\'email : '.$notifiable->email)
            ->line('Lors de votre première visite définissez votre mot de passe en cliquant sur le lien ci-dessous.')
            ->line('Ce lien est valide 24h. Passé ce délai, vous devrez demander un nouveau lien.')
            ->action('Je définis mon mot de passe', $resetUrl)
            ->line('Merci');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray(mixed $notifiable): array
    {
        return [
            //
        ];
    }
}

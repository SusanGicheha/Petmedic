<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Vaccination;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VaccinationUpdate extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $vaccination;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Vaccination $vaccination)
    {
        $this->user = $user;
        $this->vaccination = $vaccination;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->markdown('emails.vaccinations')
        ->subject('Vaccinations Update') 
        ->with([
            'name' => $this->user->name,
            'email' => $this->vaccination->email,
            'link' => route('vaccinations.show'),
        ]);
    }
}

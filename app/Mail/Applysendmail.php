<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Applysendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $last_name;
    private $first_name;
    private $last_name_kana;
    private $first_name_kana;
    private $birth_date;
    private $now_job;
    private $tel;
    private $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->last_name = $inputs['last_name'];
        $this->first_name = $inputs['first_name'];
        $this->last_name_kana  = $inputs['last_name_kana'];
        $this->first_name_kana  = $inputs['first_name_kana'];
        $this->birth_date  = $inputs['birth_date'];
        $this->now_job  = config('const.now_job.'.$inputs['now_job']);
        $this->tel  = $inputs['tel'];
        $this->email  = $inputs['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('monchan0819@gmail.com')
            ->subject('応募がありました')
            ->view('job_seeker.mail')
            ->with([
                'last_name' => $this->last_name,
                'first_name' => $this->first_name,
                'last_name_kana'  => $this->last_name_kana,
                'first_name_kana'  => $this->first_name_kana,
                'birth_date'  => $this->birth_date,
                'now_job'  => $this->now_job,
                'tel'  => $this->tel,
                'email'  => $this->email,
            ]);
    }
}

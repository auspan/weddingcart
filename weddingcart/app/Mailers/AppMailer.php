<?php
/**
 * Created by PhpStorm.
 * User: 59420166
 * Date: 09-05-2016
 * Time: 16:12
 */

namespace weddingcart\Mailers;


use Illuminate\Mail\Mailer;

class AppMailer {

    protected $mailer;

    protected $from;
    protected $to;
    protected $view;
    protected $subject;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendInviteEmail($data)
    {
        $recepients = $data['to'];
        $this->data = $data;
        $this->from = 'invites@weddincart.com';
        $this->subject = 'Wedding Invitation';
        $this->subject = $data['subject'];
        $this->view = "emails.invite";
        $this->deliver($recepients);
    }

    public function deliver($recepients)
    {
        foreach ($recepients as $recepient) {
            $this->to = $recepient;
        $this->mailer->send($this->view, $this->data, function($message){
            $message->from($this->from, 'WeddinCart Invitation')
                ->to($this->to)
            ->subject($this->subject);
        });
    }
    }
}
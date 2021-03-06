<?php
namespace App\Mailers;

use App\Models\Front\Page;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer {
    protected $mailer;
    protected $fromAddress = 'contato@elevacorp.com.br';
    protected $fromName = 'Contato Escalável';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendTicketInformation($user, Page $ticket)
    {
        $this->to = $user->email;
        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->title";
        $this->view = 'emails.ticket_info';
        $this->data = compact('user', 'ticket');

        return $this->deliver();
    }

    public function sendTicketComments($ticketOwner, $user, Page $ticket, $comment){
        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
        $this->view = 'emails.ticket_comments';
        $this->data = compact('ticketOwner', 'user', 'ticket', 'comment');

        return $this->deliver();
    }

    public function sendTicketStatusNotification($ticketOwner, Page $ticket){

        $this->to = $ticketOwner->email;
        $this->subject = "RE: $ticket->title (Ticket ID: $ticket->ticket_id)";
        $this->view = 'emails.ticket_status';
        $this->data = compact('ticketOwner', 'ticket');

        return $this->deliver();
    }

    //envia email quando um usuario é criado
    public function sendDatAccess($user,$pass)
    {
        $this->to = $user->email;
        $this->subject = "Dados de Acesso - $user->name";
        $this->view = 'emails.ticket_create_user';
        $this->data = compact('user','pass');

        return $this->deliver();
    }

    //envia email de contato
    public function sendContact($param)
    {
       $nome = $param->name;

        $this->to = 'contato@scalavel.com';
        $this->subject = "Contato - $param->name";
        $this->view = 'template.emails.contact';
        $this->data = compact('nome');

        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message) {
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);
        });
    }

}

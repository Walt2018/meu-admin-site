<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Suporte Tickets Elevacorp - Status</title>
</head>
<body>
    <p>
        Obrigado <b>{{ucfirst ($user->name)}}</b> por entrar em contato com nossa equipe de suporte. Foi aberto um ticket de suporte para você. Você será notificado quando uma resposta for feita por e-mail. Os detalhes do seu bilhete são mostrados abaixo:
    </p>

    <p>Título: {{ $ticket->title }}</p>
    <p>Prioridade: {{ $ticket->priority }}</p>
    <p>Status: 
        @if($ticket->status=='Open')
            Aberto
        @else
            Fechado
        @endif

    </p>

    <p>
        Você pode visualizar esse ticket a qualquer momento em {{ url('tickets/'. $ticket->ticket_id) }}
    </p>

</body>
</html>
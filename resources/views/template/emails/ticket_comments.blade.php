<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Suporte Tickets Elevacorp</title>
</head>
<body>
    <p>
        {{ $comment->comment }}
    </p>

    ---
    <p>Resposta por: {{ $user->name }}</p>

    <p>Título: {{ $ticket->title }}</p>
    <p>Número: {{ $ticket->ticket_id }}</p>
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
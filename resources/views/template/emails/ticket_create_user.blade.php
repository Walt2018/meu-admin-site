<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ticket Elevacorp - Dados de Acesso</title>
</head>
<body>
    <p>
        Obrigado <b>{{ucfirst ($user->name)}}</b> por fazer parte do nosso sistema.
         Você terá todo o suporte que precisar afim de tirar todas suas dúvidas em relação a uma área específica.
         Teremos o prazer em ajudá-lo.
    </p>

    Segue abaixo seus dados de acesso ao painel.

    <p><b>Login:</b> {{ $user->email }}</p>
    <p><b>Senha:</b>@php echo $pass['senha']; @endphp</p>

    <p>
        Você pode fazer login a qualquer momento em {{ url('/') }}
    </p>

</body>
</html

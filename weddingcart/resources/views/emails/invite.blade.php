<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
    Welcome to WeddinCart.

    <h3> {{ $weddingDetails['bnm'] }} </h3>
    <h3>Weds</h3>
    <h3> {{ $weddingDetails['gnm'] }} </h3>

    <h2>On</h2>

    <h3>{{ $weddingDetails['wdt'] }}</h3>
    You are invited to the wedding of  wedding.

    To visit the wedding page <a href="{{ url("invitation/{$weddingDetails['tok']}") }}">click here</a>.
    This invitation is to be improved further.

</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>


Utilisateur : <strong2> {{ $username }} </strong2> <br>
Mdp : <strong> {{ $password }} </strong>


</body>
</html>

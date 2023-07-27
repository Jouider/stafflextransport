<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>
        <h2>Prise de contact sur STAFFLEX</h2>
        <p>Réception d'une prise de contact avec les éléments suivants :</p>
        <ul>
            <li><strong>Nom</strong> : {{ $contact['name'] }}</li>
            <li><strong>Email</strong> : {{ $contact['email'] }}</li>
            <li><strong>Sujet</strong> : {{ $contact['subject'] }}</li>
            <li><strong>Message</strong> : {{ $contact['message']}}</li>
        </ul>
    </body>
</body>
</html>

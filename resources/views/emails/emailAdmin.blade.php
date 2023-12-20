<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/email.css') }}">
    <style>
    body {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
    }

    .container {
        margin: 0 auto;
        padding: 30px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
    }

    h1, p {
        margin-bottom: 20px;
    }

    h1 {
        color: #0B2341;
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    p {
        font-size: 18px;
        color: #555;
        line-height: 1.5;
    }

    .footer {
        margin-top: 10px;
        padding-top: 15px;
        border-top: 1px solid #ddd;
        color: #777;
    }
    #appv3r{
        font-size: 16px ;
        text-align: center;
    }
    #auto{
        margin-right : 15px;
        font-size: 14px ;
    }
    .footer a {
        color: #3498db;
        text-decoration: none;
        font-weight: 600;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Bonjour,</h1>

        <p> <b>{{ $data['superieurNom'] }}</b> a lu le formulaire <b>{{ $data['formName'] }}</b> de <b>{{ $data['employeNom'] }}</b>.</p>

        <p>Merci.</p>
    </div>

    <div class="footer">
        <p id="auto">Ceci est un message automatique, veuillez ne pas répondre.</p>
        <p id="appv3r">Cliquez ici pour accéder à : <a href="{{ url('/') }}" target="_blank">appV3R</a></p>
    </div>
</body>
</html>

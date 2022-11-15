<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body style="background-color:rgb(75, 0, 102)">



    <a style="color: white"><img src="http://gruppo4.demohackademy.it/img/f.png" alt="" style="height: 40px" style="width: 40px"> Presto.it</a>
    
    
    <header style="text-align: center" style="color: white">
        <h2 style="color: white">Caro Revisore,</h2>
        <h1 style="color: white">Un utente ha richiesto di lavorare con noi!</h1>
        <h2 style="color: white">Ecco i suoi dati: </h2>
        <p style="color: white">Nome: {{$user->name}}</p>
        <p style="color: white">Email: {{$user->email}}</p>
        <p style="color: white">Età: {{$userAge}}</p>
        <p style="color: white">Indirizzo: {{$userAddress}}</p>
        <p style="color: white">Descrizione: {{$userDescription}}</p>
        <p style="color: white">Se vuoi renderlo revisore clicca qui:</p>
        <a style="color: white" href="{{route('makeRevisor' , compact('user'))}}"> <button>Rendi revisore!</button></a>
    </header>




    <footer style="margin-bottom: 0px"><p style="color: white">Presto.it 2022 © Ogni diritto è riservato</p> </footer>

    


    
</body>
</html>
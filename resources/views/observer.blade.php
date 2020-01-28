<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page de test</title>
        <style>
            h1{
                text-align: center;
                color: red;
                font-size: 400%;
            }
        </style>
</head>
<h1>NON MODIFIE:</h1>
<h1>{{$obs1->getText()}}</h1>
<h1>{{$obs2->getText()}}</h1>
{{$sujet->updateObs()}}
<h1>MODIFIE</h1>
<h1>{{$obs1->getText()}}</h1>
<h1>{{$obs2->getText()}}</h1>


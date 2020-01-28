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

<h1>{{$a->increment()}}</h1>
<h1>{{$a->value()}}</h1>
<h1>{{$b->increment()}}</h1>
<h1>{{$b->value()}}</h1>
<h1>{{$a->increment()}}</h1>
<h1>{{$a->value()}}</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @foreach ($trainings as $training)   
                <li class='list-group-item'>{{$training->name}}
                <li class='list-group-item'>{{$training->length}}
                <li class='list-group-item'>{{$training->max_people}}
                <li class='list-group-item'>{{$training->type}}
        @endforeach
</body>
</html>
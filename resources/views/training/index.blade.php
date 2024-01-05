@extends('layouts.main')

@section('content')

<ul class="list-group">

    @foreach ($trainings as $training)
    <li class='list-group-item'>{{$training->name}}
    <a class="btn btn-primary" href="{{route('training.update', ['id' => $training->id])}}">Modifier</a>
    <button class = "supprimer" type="button">Supprimer</button>
    </li>
    @endforeach
</ul>
@endsection
@extends('layouts.app')

@section('content')
    <a href="/pubs/titles" class="btn btn-default">Ga terug naar overzicht</a>
    <h1>{{$title[0]->title}}</h1>
    <small>Afdelingnummer: {{$title[0]->title_id}}</small>
    <hr>
    <a href="/pubs/titles/{{$title[0]->title_id}}/edit" class="btn btn-default">Wijzig</a>
    {!!Form::open(['action' => ['TitlesController@destroy', $title[0]->title_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Verwijder', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
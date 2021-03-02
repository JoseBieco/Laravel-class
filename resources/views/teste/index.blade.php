@extends('layout')

@section('content')
    @foreach ($items as $item)
        <h2><a href="/testes/{{ $item->id }}">{{ $item->title }}</a></h2>
        <h4>{{ $item->subTitle }}</h4>
        <p>{{ $item->text }}</p>
    @endforeach
@endsection
@extends('layout')

@section('content')
    @foreach ($items as $item)
        <h2><a href="{{ $item->path() }}">{{ $item->title }}</a></h2>
        <h4>{{ $item->subTitle }}</h4>
        <p>{{ $item->text }}</p>
    @endforeach
@endsection
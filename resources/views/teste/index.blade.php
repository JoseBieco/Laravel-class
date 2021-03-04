@extends('layout')

@section('content')
    @forelse ($items as $item)
        <h2><a href="{{ $item->path() }}">{{ $item->title }}</a></h2>
        <h4>{{ $item->subTitle }}</h4>
        <p>{{ $item->text }}</p>
    @empty
        <p>Nenhuma tag Cadastrada</p>   
    @endforelse
@endsection
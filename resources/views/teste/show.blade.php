@extends('layout')

@section('content')
    <div class="conteiner">
        <h2>{{ $item->title }}</h2>
        <h4>{{ $item->subTitle }}</h4>
        <p>{{ $item->text }}</p>
    </div>    
@endsection
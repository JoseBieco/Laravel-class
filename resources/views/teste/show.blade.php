@extends('layout')

@section('content')
    <div class="conteiner">
        <h2>{{ $item->title }}</h2>
        <h4>{{ $item->subTitle }}</h4>
        <p>{{ $item->text }}</p>

        <p style="margin-top: 1.2em">
            @foreach ($item->tags as $tag)
                <a href="{{ route("testes.index", ["tag" => $tag->name]) }}">{{ $tag->name }}</a>
            @endforeach
        </p>
    </div>    
@endsection
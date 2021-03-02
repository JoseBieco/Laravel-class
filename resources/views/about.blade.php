@extends('layout')

@section('content')
    <p>TESTANDO CSS</p>   
    
    <div class="content">
        @foreach ($assignments as $item)
            <h2><a href="/about/{{ $item->id }}">{{ $item->title }}</a></h2>
            <h4>{{ $item->subTitle }}</h4>
            <p>{{ $item->text }}</p>
        @endforeach

    </div>
@endsection
@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="conteiner">
            <h1>New Teste</h1>

            <form method="POST" action="/testes">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="subTitle">Subtitle</label>

                    <div class="control">
                        <input class="input" type="text" name="subTitle" id="">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="text">Text</label>

                    <div class="control">
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
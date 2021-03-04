@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="conteiner">
            <h1>New Teste</h1>

            <form method="POST" action="/testes">
                @csrf

                <div class="field">
                    <label class="label" for="user_id">user_id</label>

                    <div class="control">
                        <input 
                            class="input @error('user_id') is-danger @enderror" 
                            type="number" 
                            name="user_id" 
                            required
                            value="{{ old('user_id') }}"
                        >

                        @error('title')
                            <p>{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input 
                            class="input @error('title') is-danger @enderror" 
                            type="text" 
                            name="title" 
                            required
                            value="{{ old('title') }}"
                        >

                        @error('title')
                            <p>{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="subTitle">Subtitle</label>

                    <div class="control">
                        <input 
                            class="input @error('title') is-danger @enderror" 
                            type="text" 
                            name="subTitle" 
                            required
                            value="{{ old('subTitle') }}"    
                        >
                        @error('subTitle')
                            <p>{{ $errors->first('subTitle') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="text">Text</label>

                    <div class="control">
                        <textarea name="text" cols="30" rows="10">{{  old('text') }}</textarea>
                        @error('text')
                            <p>{{ $errors->first('text') }}</p>
                        @enderror
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
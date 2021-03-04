@extends("layout")

@section('content')

<div id="wrapper">
    <div id="page" class="conteiner">
        <h1>Update Teste</h1>

        <form method="POST" action="/testes/{{ $teste->id }}">
            @csrf
            @method("PUT")


            <div class="field">
                <label class="label" for="user_id">user_id</label>

                <div class="control">
                    <input class="input" type="number" name="user_id" value="{{ $teste->user_id }}">
                    @error('user_id')
                        <p>{{ $errors->first('user_id') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" value="{{ $teste->title }}">
                    @error('title')
                        <p>{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="subTitle">Subtitle</label>

                <div class="control1">
                    <input class="input" type="text" name="subTitle" value="{{ $teste->subTitle }}">
                    @error('subTitle')
                        <p>{{ $errors->first('subTitle') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="text">Text</label>

                <div class="control">
                    <textarea name="text" id="" cols="30" rows="10">{{ $teste->text }}</textarea>
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
<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use App\Models\Tag;
use Illuminate\Http\Request;

class TesteController extends Controller
{

    public function index() {
        // Show a list of resources

        if(request('tag')) {
            $items = Tag::where('name', request('tag'))->firstOrFail()->testes;
        }else {
            $items = Teste::all();
        }

        return view("teste.index", ["items" => $items]);
    }    
    public function show(Teste $item){
        // Nome dentro do wildCard {} tem q ser igual ao nome da variavel
        // Article::where('id', idFromUrl)->first();
        // Show a single resource
        // $item = Teste::findOrFail("id");
        return view("teste.show", ["item" => $item]);
    }

    public function create() {
        // Show a view to create a new resource
        return view("teste.create", [
            'tags' => Tag::all()
        ]);
    }

    public function store() {
        // Persist the new resource

        $teste = new Teste($this->validateAtributes());
        $teste->user_id = 1;
        $teste->save();

        $teste->tags()->attach(request("tags"));


        // Teste::create($this->validateAtributes());

        /*
            Teste::create(request()->validate([
                "title" => ["required", "min:2", "max:255"],
                "subTitle" => ["required", "min:2", "max:255"],
                "text" => ["required", "min:2", "max:255"]
            ]));
        */
        /*
            $teste = new Teste();

            $teste->title = request("title");
            $teste->subTitle = request("subTitle");
            $teste->text = request("text");

            $teste->save();
        */

        /*
            Teste::create([
                'title' => request('title'),
                'subTitle' => request('subTitle'),
                'text' => request('text')
            ]);
        */

        return redirect(route("testes.index"));
    }

    public function edit(Teste $item) {
        // Show a view to edit an existing resource

        // Find the data tha is associated with the id
        // $result = Teste::find($id);

        return view("teste.edit", ["teste" => $item]);
    }

    public function update(Teste $item) {
        // Persist the edited resource

        /*
            $validatedAtributes = request()->validate([
                "title" => ["required", "min:2", "max:255"],
                "subTitle" => ["required", "min:2", "max:255"],
                "text" => ["required", "min:2", "max:255"]
            ]);
        */

        $item->update($this->validateAtributes());

        // $teste = Teste::find($id);

        /*
            $item->title = request("title");
            $item->subTitle = request("subTitle");
            $item->text = request("text");
            $item->save();
        */

        // return redirect("/testes/". $item->id);
        return redirect($item->path());
    }

    public function destroy() {
        // Delete the resource
    }

    protected function validateAtributes(){
        return request()->validate([
            "user_id" => ["required"],
            "title" => ["required", "min:2", "max:255"],
            "subTitle" => ["required", "min:2", "max:255"],
            "text" => ["required", "min:2", "max:255"],
            "tags" => "exists:tags,id"
        ]);
        
    }
}

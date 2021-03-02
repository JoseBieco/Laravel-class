<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
{

    public function index() {
        // Show a list of resources
        $items = Teste::all();
        return view("teste.index", ["items" => $items]);
    }    
    public function show($id){
        // Show a single resource
        $item = Teste::find($id);
        return view("teste.show", ["item" => $item]);
    }

    public function create() {
        // Show a view to create a new resource
        return view("teste.create");
    }

    public function store() {
        // Persist the new resource

        request()->validate([
            "title" => ["required", "min:2", "max:255"],
            "subTitle" => ["required", "min:2", "max:255"],
            "text" => ["required", "min:2", "max:255"]
        ]);

        $teste = new Teste();

        $teste->title = request("title");
        $teste->subTitle = request("subTitle");
        $teste->text = request("text");

        $teste->save();

        return redirect("/testes");
    }

    public function edit($id) {
        // Show a view to edit an existing resource

        // Find the data tha is associated with the id
        $result = Teste::find($id);

        return view("teste.edit", ["teste" => $result]);
    }

    public function update($id) {
        // Persist the edited resource

        request()->validate([
            "title" => ["required", "min:2", "max:255"],
            "subTitle" => ["required", "min:2", "max:255"],
            "text" => ["required", "min:2", "max:255"]
        ]);

        $teste = Teste::find($id);

        $teste->title = request("title");
        $teste->subTitle = request("subTitle");
        $teste->text = request("text");
        $teste->save();

        return redirect("/testes/". $teste->id);
    }

    public function destroy() {
        // Delete the resource
    }
}

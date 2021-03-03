<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $fillable =['title', 'subTitle', 'text'];

    /*  Para fazer a busca do objeto por outra coluna ao invez do id, o metodo getRouteKeyName,
        tem que ser sobrescrito.
        
        public function getRouteKeyName()
        {
            return 'columnName';
        }
    */


    public function path(){
        return route("testes.show", $this);
    }
}

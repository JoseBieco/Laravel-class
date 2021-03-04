<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;

    protected $fillable =['user_id','title', 'subTitle', 'text'];

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


    public function author(){
        return $this->belongsTo(User::class, "user_id");
    }


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}

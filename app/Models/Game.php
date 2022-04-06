<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
   // protected $table = 'games' default
   //protected $primarykey = id default jest id
    //protected $timestamps = false;
    protected $attributes = [
        'score' => 5
    ]; //mozna przypisywac wartosci domyslne dla naszych pol

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

}

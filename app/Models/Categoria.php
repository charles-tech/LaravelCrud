<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categoria";

    public function whereCategoria()

    {

        $data = Categoria::select(Categoria::raw('sum(orcamento) as total, nome'));
        dump($data);
        exit();





        return $data;
    }
}

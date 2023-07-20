<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;

    protected $table = "recursos";

    public function pesquisawhere($entrada, $saida)

    {
        $inicio = '2023-07-01';
        $final = '2023-07-31';
        $data = Recursos::whereBetween('created_at', [$inicio, $final])->paginate(50);

        return $data;
    }

}

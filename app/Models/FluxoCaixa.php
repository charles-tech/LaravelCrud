<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FluxoCaixa extends Model
{
    use HasFactory;

    protected $table = "fluxo-caixa";


//    public function getall()
//    {

//        $data = DB::table('fluxo-caixa')
//            ->paginate(5);
//        return $data;
//    }


    public function pesquisawhere($entrada, $saida)

    {

        $data = FluxoCaixa::where([
            ['created_at', '>=', $entrada],
            ['created_at', '<=', $saida]
        ])->paginate(50);
        return $data;
    }




}
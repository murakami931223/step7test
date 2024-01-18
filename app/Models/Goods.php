<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Goods extends Model
{
    public function getList() {
        // goodsテーブルからデータを取得
        $goods = DB::table('goods')->get();

        return $goods;
    }
}

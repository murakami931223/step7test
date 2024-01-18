<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;

class GoodsController extends Controller
{
    public function showList() {
        // インスタンス生成
        $model = new Goods();
        $goods = $model->getList();

        return view('list', ['goods' => $goods]);
    }
}

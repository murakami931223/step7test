@extends('layouts.app')

@section('content')
<div class="goods_list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>商品画像</th>
                <th>商品名</th>
                <th>価格</th>
                <th>在庫数</th>
                <th>メーカー名</th>
                <th><button type="submit" class="btn1 btn_primary">新規登録</button></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($goods as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->goods_img }}</td>
                <td>{{ $item->goods_name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->goods_stock }}</td>
                <td>{{ $item->maker_name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/user-look.css') }}">
@endsection
@section('main')
    <div class="container">
        <form action="/order/update/{{$order->id}}" method="POST">
            <div class="c-style">金流單號</div>
            <div class="c-style">{{ $order->order_number }}</div>
            <div class="c-style">購買人</div>
            <div class="c-style">{{ $order->user->name }}</div>
            <div class="c-style">地址</div>
            <div class="c-style">{{ $order->address }}</div>
            <div class="c-style">電話</div>
            <div class="c-style">{{ $order->phone }}</div>
            <div class="c-style">運費</div>
            <div class="c-style">{{ $order->shipping_fee }}</div>
            <div class="c-style">總計</div>
            <div class="c-style">{{ $order->total_price }}</div>
            <label for="status">狀態</label>
            <select name="status" id="status">
                <option value="1" @if ($order->status == 1) selected @endif>未付款</option>
                <option value="2" @if ($order->status == 2) selected @endif>已付款</option>
                <option value="3" @if ($order->status == 3) selected @endif>已出貨</option>
                <option value="4" @if ($order->status == 4) selected @endif>已取消</option>
            </select>
            <table id="user_table" class="display">
                <thead>
                    <tr>
                        <th>商品名</th>
                        <th>單價</th>
                        <th>數量</th>
                        <th>小計</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->detail as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->qty * $item->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @csrf
            <div>
                <button type="submit">修改狀態</button>
                <a href="/order">回列表頁</a>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <!-- DataTable Core JS CDN -->
    <script src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#user_table').DataTable();
        });
    </script>
@endsection

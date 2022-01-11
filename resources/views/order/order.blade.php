@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/user-look.css') }}">
@endsection
@section('main')
    <div class="container">
        <table id="user_table" class="display">
            <thead>
                <tr>
                    <th>金流單號</th>
                    <th>購買人</th>
                    <th>地址</th>
                    <th>電話</th>
                    <th>總價</th>
                    <th>狀態</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $item)
                    <tr>
                        <td>{{$item->order_number}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->total_price}}</td>
                        <td>
                            @if ($item->status == 1)
                                未付款
                            @elseif ($item->status == 2)
                                已付款
                            @elseif ($item->status == 3)
                                已出貨
                            @elseif ($item->status == 4)
                                已取消
                            @endif
                        </td>
                        <td>
                            <a href="/order/look/{{$item->id}}">查看訂單詳情</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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

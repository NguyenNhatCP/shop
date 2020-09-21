@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Đơn hàng của bạn</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">{{number_format($item['price'], 0, '', ',')}} VNĐ</span>
                                   <p> {{ $item['item']['p_name'] }}</p>
                                   <p> | {{ $item['qty'] }} Số lượng </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Tổng giá: {{number_format($order->cart->totalPrice, 0, '', ',')}} VNĐ</strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
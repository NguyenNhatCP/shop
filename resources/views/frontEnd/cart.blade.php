@extends('frontEnd.layouts.master')
@section('title','Giỏ hàng')
@section('slider')
@endsection
@section('content')
@if(Session::has('cart'))
<section id="cart_items">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Hình</td>
                    <td class="description">Sản phẩm</td>
                    <td class="price">Giá</td>
                    <td class="quantity">Số lượng</td>
                    <td class="total">Tổng</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $cart_data)
                        <tr>
                            <td class="cart_image">
                                <a href=""><img src="{{url('products/small',$cart_data['item']['image'])}}" alt="" style="width: 100px;"></a>
                            </td>
                            <td class="cart_name">
                                <h4><a href="">{{$cart_data['item']['p_name']}}</a></h4>
                            </td>
                            <td class="cart_price">
                                <p>{{number_format($cart_data['item']['price'], 0, '', ',')}} VNĐ</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href="{{url('/cart/I_update-quantity/'.$cart_data['item']['id'])}}"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart_data['qty']}}" disabled="disabled" autocomplete="off" size="2">
                                    @if($cart_data['qty']>1)
                                        <a class="cart_quantity_down" href="{{url('/cart/R_update-quantity/'.$cart_data['item']['id'])}}"> - </a>
                                    @endif
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{number_format($cart_data['item']['price']*$cart_data['qty'], 0, '', ',')}} VNĐ</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{url('/cart/deleteItem',$cart_data['item']['id'])}}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
@else
@endif

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>Bạn có muốn tiếp tục mua sắm?</h3>
                <p>
                    <a href="list-products"> Tiếp tục mua sắm</a>
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    @if(Session::has('message_apply_sucess'))
                        <div class="alert alert-success text-center" role="alert">
                            {{Session::get('message_apply_sucess')}}
                        </div>
                    @endif
                    <div class="total_area">
                        <ul>
                            @if(Session::has('cart'))
                                <li>Tổng cộng <span>{{number_format($totalPrice, 0, '', ',')}} VNĐ</span></li>
                                <div style="margin-left: 20px;"><a class="btn btn-default check_out" href="{{url('/check-out')}}">Đặt hàng</a></div>
                            @else
                                <li>Tổng cộng <span>0 VNĐ</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
@endsection
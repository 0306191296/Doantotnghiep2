{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
        
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head--> --}}
<!DOCTYPE html>
<html lang="en">
@include('user.head')
<body>
@include('sweetalert::alert')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{route('trangchu')}}">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@php
						$bien=0;
						@endphp
						
						@foreach ($cart as $tmp)
						<tr>
							<td class="cart_product">
								<a href=""><img id="anhbia" src="{{asset('images/404/'. $tmp['anhbia'])}}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $tmp['ten']}}</a></h4>
								<p>Mau: {{$tmp['mau']}}, Bo nho: {{$tmp['bonhotrong']}} GB</p>
							</td>
							<td class="cart_price">
								{{$bien+=$tmp['gia']}}
								<p>{{$tmp['gia']}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									{{-- <a class="cart_quantity_up" href=""> + </a> --}}
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$tmp['soluong']}}" autocomplete="off" size="2">
									{{-- <a class="cart_quantity_down" href=""> - </a> --}}
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="
								{{-- {{ route('cart.remove', ['id' => $tmp->id]) }} --}}
								"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						

						
						
                        <tr id="nds">
                                <Td>
									<a class="btn btn-default update" href="">Xóa toàn bộ</a>
									<h5>{{$bien}}<h5> 
                                    <form action="{{route('thanhtoan')}}" method="post">
                                    <button id="hihi" type="submit" name="redirect">Thanh toan vnpay</button>
									
                                    @csrf
                                    </form>
                                    
                                </Td>
                        
                        <style>
							#anhbia{
								width: 110px;
								height: 110px;
							}
                            #hihi{
                                border: none;
                                            color: blue;
                                            padding: 15px 32px;
                                            text-align: center;
                                            text-decoration: none;
                                            display: inline-block;
                                            font-size: 16px;
                                            margin-left: 400px;
                                            cursor: pointer;
                            }
                            </style>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section>
		@include('user.footer')
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

	<script src="js/price-range.js"></script>
</body>
</html>
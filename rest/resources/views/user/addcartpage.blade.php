<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>Cart Page</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/addcart.css">
</head>
<style>
    body {
        background-image: url('assets/img/coffee.webp');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
<body>
    <div class="wrapper">
		<h1>Welcome {{ $user->name }}</h1>
		<div class="project">
			<div class="shop">

			<?php
			$totalprice=0;
			?>
			@foreach ($cartItems as $cartItem)
				<div class="box">
					<img src="{{ asset('food/' . $cartItem->food->image) }}" alt="{{ $cartItem->food->foodtitle }}">
					<div class="content">
						<h3>{{ $cartItem->food->foodtitle }} </h3>
						<p>Size: {{ $cartItem->size }}</p>
						<p>Branch: {{ $cartItem->branch_name }}</p>
						<p class="unit">Total Price: {{ number_format($cartItem->price * $cartItem->quantity, 1) }} Lkr</p>

						<p class="unit">Quantity: <input name="" value="{{ $cartItem->quantity }}"></p>
						<form action="{{ route('cart.remove', $cartItem) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></button>
        </form>					
	</div>
				</div>

				<?php
			
					$totalprice +=$cartItem->total_price;
				?>
				@endforeach
				

			</div>
			<div class="right-bar">
				<p><span>Quantity</span> <span></span></p>
				<hr>
				<br>
				<br>
				<br>
				<br>
				<p><span>Total</span> <span> Rs{{$totalprice}}.00</span></p>
				
				<a href="{{url('stripe',$totalprice)}}"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
		</div>
	</div>


	
</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Foodsite</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link rel="stylesheet" href="assets/css/cart.css">
</head>
<style>
    body {
        background-image: url('assets/img/coffee.webp');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .radio-inputs {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  border-radius: 0.5rem;
  background-color: #F5ECE6; /* Creamy beige background */
  box-sizing: border-box;
  padding: 0.25rem;
  width: 300px;
  font-size: 14px;
}

.radio-inputs .radio {
  flex: 1 1 auto;
  text-align: center;
}

.radio-inputs .radio input {
  display: none;
}

.radio-inputs .radio .name {
  display: flex;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border-radius: 0.5rem;
  border: none;
  padding: .5rem 0;
  color: #4E3629; /* Brown text color */
  transition: all .15s ease-in-out;
}

.radio-inputs .radio input:checked + .name {
  background-color: #D4A799; /* Light coral background for selected radio */
  font-weight: 600;
}

button:hover {
  background-color: #7B574D; /* Darker coral for button hover */
  color: #fff;
  transform: translateY(-7px);
}
.container {
        max-width: 1200px; /* Set a maximum width for the container */
        margin: 0 auto; /* Center the container horizontally */
        padding: 20px; /* Add some padding to the container */
        background-color: rgba(255, 255, 255, 0.9); /* Add a semi-transparent white background */
        border-radius: 10px; /* Add rounded corners to the container */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow to the container */
    }
</style>

<body> 


	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="assets/img/logo.png" height="40" width="50" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Coffee Shop</h1>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="{{url('/cart')}}" class="tm-nav-link active">Food</a></li>
								<li class="tm-nav-li"><a href="{{url('/cartitem')}}" class="tm-nav-link">Add cart</a></li>
								
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
		<main>
		<header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to Coffee Shop</h2>
        
    </header>
    <div class="tm-paging-links">
				<nav>
					<ul>
    <li class="tm-paging-item"><a href="#" class="tm-paging-link active" data-category="food">Food</a></li>
    <li class="tm-paging-item"><a href="#" class="tm-paging-link" data-category="Beverages">Coffee</a></li>
    <li class="tm-paging-item"><a href="#" class="tm-paging-link" data-category="Dessert">Cakes</a></li>
</ul>
				</nav>
			</div>


			
			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="foodTableBody" class="tm-gallery-page" >
				@foreach ($food as $food)
					<article class="col-lg-12 col-md-6 col-sm-12 col-16 tm-gallery-item" id="foodRow{{ $food->id }}"  data-category="{{ $food->category }}">
						<figure>
						<img src="{{ asset('food/' . $food->image) }}" alt="{{ $food->foodtitle }}" class="img-fluid tm-gallery-img" />
							<figcaption>
							<h4 class="tm-gallery-title">{{ $food->foodtitle }}</h4>
            				<p class="tm-gallery-description">{{ $food->description }}</p>
            				<p class="tm-gallery-price">Lkr.{{ $food->attributes->max('price') }}</p>
							<form action="{{ route('user.cart') }}" method="GET">
                            @csrf
                         <input type="hidden" name="food_id" value="{{ $food->id }}">
							<button type="submit" class="button">
 							<svg viewBox="0 0 16 16" class="bi bi-cart-check" height="24" width="24" xmlns="http://www.w3.org/2000/svg" fill="#fff">
 							 <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
  							<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
							</svg>
  							<p class="text">Shop Now</p>
							</button>
							</form>
							</figcaption>
						</figure>
					</article>
					
					@endforeach
					

				</div> 
				

			 <!-- gallery page 3 -->
			</div>
    <div class="tm-section tm-container-inner" style="border-radius: 45px">
        <div class="row">
            <div class="col-md-6">
            <h4 class="tm-gallery-title" style="text-align: center;">{{ $selectedFood->foodtitle }}</h4>
                <figure class="tm-description-figure" style="padding-top: 25px;">
                    <img  style="border-radius: 12px; max-width: 100%;
  height: 220px;" src="{{ asset('food/' . $selectedFood->image) }}" alt="{{ $selectedFood->foodtitle }}" class="img-fluid" />
                </figure>
                <p class="tm-mb-45" style="text-align:center; padding: 10px;">{{ $selectedFood->description }}</p>
            </div>
            <div class="col-md-6">
                <div class="tm-description-box" style="padding-top: 80px;">
                   
                    <p class="tm-gallery-price" id="displayedPrice">Lkr.{{ $maxPrice }}</p>
					

                    <div class="radio-inputs">
                        <label class="radio">
                          
                    @foreach ($attributes as $attribute)
                        <button style=" padding: 0.3em 3em; font-size: 12px; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 500; color: #000;background-color: #fff;
                         border: none;border-radius: 45px;box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);transition: all 0.3s ease 0s;cursor: pointer;outline: none; " type="radio" name="radio"  onclick="updatePrice({{ $attribute->price }}, '{{ $attribute->size }}')">
                        <span class="name">  {{ $attribute->size }} </span>
                    </button>
                    @endforeach
                    </label>
                </div>
                

					<form style="padding-top: 20px;" action="{{ route('user.cart') }}" method="GET">
                        <label for="branch_id">Select Branch:</label>
                        <select name="branch_id" id="branch_id">
                            <option value="">All Branches</option>
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->name }}" @if ($branch->name == $selectedBranchName) selected @endif>{{ $branch->name }}</option>
                            @endforeach
                        </select>
                        <button type="button" id="applyButton" require>Select Branch</button>
                    </form>

                    <!-- Display the selected branch name -->
                    <p>Selected Branch: <span id="selectedBranchName"></span></p>
                    
                  
                    <form style="padding-top: 60px; padding-left: 90px;"  action="{{ route('user.add_to_cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="food_id" value="{{ $selectedFood->id }}">
                        <input type="hidden" name="selectedSize" id="selectedSize" >
                        <input type="hidden" name="selectedPrice" id="selectedPrice">
                        <input type="hidden" name="selectedBranchName" id="selectedBranchNameInput">
                        <input type="number" name="quantity" id="quantity" value="1" min="1">
                        <button style="pading: 15px;;" type="submit" class="button" >
                            <svg viewBox="0 0 16 16" class="bi bi-cart-check" height="24" width="24" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                            </svg>
                            <p class="text">Add Cart</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



			<!--Flash Message-->
			@if(session('food_exists_error'))
        <script>
            alert("{{ session('food_exists_error') }}");
        </script>
    @endif

    @if(session('food_added_success'))
        <script>
            alert("{{ session('food_added_success') }}");
        </script>
    @endif
	<!--end of flash message-->
			
			
		</main>




		






		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2023 Coffee Shop 
            
            | Design: <a rel="nofollow" href="">Chamudika Pallewela</a></p>
		</footer>
	</div>







	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
    $(document).ready(function () {
        // Retrieve stored category from local storage, default to "food"
        var storedCategory = localStorage.getItem("selectedCategory") || "food";

        // Show/hide food items based on the stored category
        filterFoodItems(storedCategory);

        // Highlight the correct link
        $(".tm-paging-link").removeClass("active");
        $('.tm-paging-link[data-category="' + storedCategory + '"]').addClass("active");

        // Handle category link clicks
        $(".tm-paging-link").on("click", function (e) {
            e.preventDefault();
            var selectedCategory = $(this).data("category");
            filterFoodItems(selectedCategory);
            localStorage.setItem("selectedCategory", selectedCategory);

            $(".tm-paging-link").removeClass("active");
            $(this).addClass("active");
        });

        function filterFoodItems(category) {
            $(".tm-gallery-item").each(function () {
                var foodCategory = $(this).data("category");
                if (category === foodCategory || category === "all") {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });
</script>


<script>
    function updatePrice(price, size) {
    // Update the displayed price on the page
    console.log('Updating price:', price);
    document.getElementById('displayedPrice').textContent = 'Lkr.' + price;

	document.getElementById('selectedSize').value = size;
    document.getElementById('selectedPrice').value = price;
}

</script>



<script>
    $(document).ready(function() {
    $('#applyButton').click(function() {
        var selectedBranch = $('#branch_id').val();
        $('#selectedBranchName').text(selectedBranch);
        // Set the value of the hidden input field
        $('#selectedBranchNameInput').val(selectedBranch);
    });
});

</script>


</body>
</html>
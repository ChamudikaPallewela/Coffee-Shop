<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>



	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/admin.css">
   
	

  

	<title>Coffee shop</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
    <a href="#" class="brand">
		<i class='bx bxs-coffee'></i>
			<span class="text">Coffee Shop</span>
		</a>
		<ul class="side-menu top" style="padding-left: 1px;">
			<li >
				<a href="{{url('/admin')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="{{url('/foodmenu')}}">
                <i class='bx bxs-food-menu' ></i>
					<span class="text">Food-Menu</span>
				</a>
			</li>
			<li>
			
				<a href="{{ route('admin.dashboard') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Purchases</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu"  style="padding-left: 1px;">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
            <li class="nav-item">
        <a href="#" class="nav-link logout" onclick="confirmLogout()">
        <i class='bx bx-log-out'></i>
            <span class="text">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
		</ul>
	</section>
	<!-- SIDEBAR -->



<!-- CONTENT -->
<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="" class="nav-link">Dashboard</a>
			<form action="">
				
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="" class="notification">
				<i class='bx bxs-message' ></i>
				<span class="num">3</span>
			</a>
			<a href="" class="profile">
            {{ Auth::user()->name }}
			</a>
		</nav>
		<!-- end of NAVBAR -->

		<!-- MAIN -->
				<!-- MAIN -->
				<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{url('/admin')}}">Home</a>
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{url('/foodmenu')}}">Food-Menu</a>
						</li>
					</ul>
				</div>
				
			</div>
			<ul class="box-info">
				<li class="food-box " onclick="filterByCategory('food'); openAddFoodModal('food')">
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
					<h3 id="foodCount">{{ $foodCount }}</h3>
						<p>food</p>
					</span>
				</li>
				<li class="beverages-box" onclick="filterByCategory('Beverages'); openAddFoodModal('Beverages')">
                <i class='bx bx-coffee-togo' ></i>
					<span class="text">
					<h3 id="beveragesCount">{{ $beverageCount }}</h3>
						<p>Coffee</p>
					</span>
				</li>
				<li  class="dessert-box"  onclick="filterByCategory('Dessert'); openAddFoodModal('Dessert')">
                <i class='bx bxs-cake' ></i>
					<span class="text">
					<h3 id="dessertCount">{{ $dessertCount }}</h3>
						<p>Cakes</p>
					</span>
				</li>
              
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Food-Menu</h3>

			
						<!-- Button trigger modal pop up -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Food
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Food Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	<!--  form start -->
      <div class="modal-body">
      
	  <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="foodtitle" class="form-label">Food Title:</label>
        <input type="text" class="form-control" id="foodtitle" placeholder="Food Title" name="foodtitle" required>
    </div>
 

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" placeholder="Description" name="description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category:</label>
        <input type="text" class="form-control" id="category" placeholder="Category" name="category" required>
		
    </div>
   
    <div class="mb-3">
    <label for="branches" class="form-label">Select Branches:</label>
    <div>
        @foreach ($branches as $branch)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="branches[]" value="{{ $branch->id }}">
                <label class="form-check-label" for="branches">{{ $branch->name }}</label>
                <!-- Add input field for branch quantity -->
                <input type="text" name="branch_quantities[{{ $branch->id }}]" placeholder="Quantity" >
            </div>
        @endforeach
    </div>
</div>
	  <!-- Attributes -->
	  <div class="mb-3">
    <label for="attributes" class="form-label">Attributes:</label>
    <div class="attribute-inputs">
        <div class="attribute-input">
            <input type="text" name="sizes[]" placeholder="Size" required>
            <input type="text" name="prices[]" placeholder="Price" required>
            <input type="text" name="quty[]" placeholder="Quantity" required>
			<button type="button" class="close-attribute">&times;</button>

        </div>
    </div>
    <button type="button" id="add-attribute" class="btn btn-secondary">Add Attribute</button>
</div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
      </div>
	  <!-- end form start -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
					</div>
                     <div class="table-container">
                     <table>
    <thead>
        <tr>
            <th>Food Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Category</th>
            <th>Attribute Size</th>
            <th>Branches</th>
           
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody id="foodTableBody">
        @foreach ($food as $foodItem)
            <tr id="foodRow{{ $foodItem->id }}" data-category="{{ $foodItem->category }}" data-attributes="{{ $foodItem->attributes }}">
                <td>{{ $foodItem->foodtitle }}</td>
                <td>{{ $foodItem->description }}</td>
                <td>
                    <img src="{{ asset('food/' . $foodItem->image) }}" alt="{{ $foodItem->foodtitle }}" width="150" height="150">
                </td>
                <td>{{ $foodItem->category }}</td>
                <td colspan="2">
                    @if ($foodItem->attributes->count() > 0)
                        @foreach ($foodItem->attributes as $attribute)
                            <p><strong>Size:</strong> {{ $attribute->size }}</p>
                            <p><strong>Price:</strong> {{ $attribute->price }}</p>
                            <p><strong>Quantity:</strong> {{ $attribute->quty }}</p>
                            <hr>
                        @endforeach
                    @else
                        No attributes available
                    @endif
                </td>
                <td>
                <!-- Loop through branches and quantities for this food item -->
                @if ($foodItem->branches->count() > 0)
                    <ul>
                        @foreach ($foodItem->branches()->get() as $branch)
                            <li>{{ $branch->name }} (Quantity: {{ $branch->pivot->quantity ?? 'N/A' }})</li>
                        @endforeach
                    </ul>
                @else
                    No branches available
                @endif
            </td>
                <td>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#editModal" onclick="openEditModal({{ $foodItem->id }})">
                        <i class="bx bx-pencil bounce-icon" style="color: #449e3d; font-size: 24px;"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ url('/deleteFood', $foodItem->id) }}">
                        <i class="bx bx-trash bounce-icon" style="color: #FF0000; font-size: 24px;" onclick="confirmDelete(event)"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

 

				</div>

          		

			</div>
		</main>
	</section>
	<!-- CONTENT -->



    <!-- The Bootstrap modal for editing -->
    <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-modal-label">Edit Food Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="{{ route('updatefood') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="food_id" id="food_id">
                        <div class="form-group">
                            <label for="foodtitle">Food Title:</label>
                            <input type="text" class="form-control" name="foodtitle" id="edit_foodtitle">
                        </div>
                       
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" id="edit_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="current_image">Current Image:</label>
                            <img src="" alt="Current Image" id="edit_current_image" width="150" height="150">
                        </div>
                        <div class="form-group">
                            <label for="new_image">New Image (leave empty to keep current image):</label>
                            <input type="file" class="form-control" name="new_image" id="edit_new_image">
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
							<span id="edit_category_display"></span>
                            <input type="text" class="form-control" name="category" id="edit_category" hidden disabled >
                        </div>

                     
                      
						<div class="form-group">
                        <label for="edit_attributes">Attributes:</label>
                        <div id="edit_attributes">
                            <!-- Attribute fields will be added here -->
                        </div>
                    </div>
                    
						<div id="edit_attributes"></div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




	<script>
  function openEditModal(foodId) {
    var foodRow = document.getElementById('foodRow' + foodId);
    var foodTitle = foodRow.querySelector('td:nth-child(1)').textContent;
    var foodDescription = foodRow.querySelector('td:nth-child(2)').textContent;
    var foodCategory = foodRow.querySelector('td:nth-child(4)').textContent;
    var foodImageSrc = foodRow.querySelector('td:nth-child(3) img').src;

    document.getElementById('food_id').value = foodId;
    document.getElementById('edit_foodtitle').value = foodTitle;
    document.getElementById('edit_description').value = foodDescription;
    document.getElementById('edit_current_image').src = foodImageSrc;
    document.getElementById('edit_category_display').textContent = foodCategory;

    
    var attributesData = foodRow.getAttribute('data-attributes');
    var attributesArray = JSON.parse(attributesData);

    var attributesContainer = document.getElementById('edit_attributes');
    attributesContainer.innerHTML = '';

	if (attributesArray) {
    for (var i = 0; i < attributesArray.length; i++) {
        var attributeDiv = document.createElement('div');
        attributeDiv.className = 'attribute-group';

        var sizeInput = document.createElement('input');
        sizeInput.type = 'text';
        sizeInput.className = 'form-control';
        sizeInput.name = 'edit_sizes[]';
        sizeInput.value = attributesArray[i].size;
        attributeDiv.appendChild(sizeInput);

        var priceInput = document.createElement('input');
        priceInput.type = 'text';
        priceInput.className = 'form-control';
        priceInput.name = 'edit_prices[]';
        priceInput.value = attributesArray[i].price;
        attributeDiv.appendChild(priceInput);

        var qtyInput = document.createElement('input');
        qtyInput.type = 'text';
        qtyInput.className = 'form-control';
        qtyInput.name = 'edit_qtys[]';
        qtyInput.value = attributesArray[i].quty;
        attributeDiv.appendChild(qtyInput);

        attributesContainer.appendChild(attributeDiv);
    }
	}
    
    var editModal = new bootstrap.Modal(document.getElementById('editModal'));
    editModal.show();
}

    </script>



	<script>
		window.onload = function () {
	// By default, show "food" rows
	filterByCategory('food');
	openAddFoodModal('food');
	
};

function filterByCategory(category) {
	console.log('Filtering by category:', category);
	// Hide all rows
	let rows = document.querySelectorAll('[id^="foodRow"]');
	rows.forEach(row => {
		row.style.display = 'none';
	});

	// Show rows that match the selected category
	let filteredRows = document.querySelectorAll(`[id^="foodRow"][data-category="${category}"]`);
	filteredRows.forEach(row => {
		row.style.display = 'table-row';
	});
	
}
function openAddFoodModal(category) {
	// Set the value of the category input field in the modal
	const categoryInput = document.getElementById('category');
	categoryInput.value = category;
	selectedCategory = category;
}

	</script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addAttributeButton = document.getElementById('add-attribute');
        const form = document.getElementById('food-form');
        const attributeInputs = document.querySelector('.attribute-inputs');

        addAttributeButton.addEventListener('click', function () {
            const attributeInput = document.createElement('div');
            attributeInput.className = 'attribute-input';
            attributeInput.innerHTML = `
                <input type="text" name="sizes[]" placeholder="Size" required>
                <input type="text" name="prices[]" placeholder="Price" required>
                <input type="text" name="quty[]" placeholder="Quantity" required>
                <button type="button" class="close-attribute">&times;</button>
            `;

            attributeInputs.appendChild(attributeInput);
            
            const closeButtons = attributeInputs.querySelectorAll('.close-attribute');
            closeButtons.forEach(closeButton => {
                closeButton.addEventListener('click', function () {
                    attributeInputs.removeChild(attributeInput);
                });
            });
        });
    });
</script>






	
	

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="assets/js/admin.js"></script>   
  

</body>
</html>
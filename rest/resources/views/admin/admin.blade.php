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
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

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
			<li class="active">
				<a href="{{url('/admin')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
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
		<ul class="side-menu" style="padding-left: 1px;">
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
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>


			<form action="{{ route('admin.index') }}" method="GET">
                <input type="text" name="search" value="{{ $search }}" placeholder="Search users...">
                <button type="submit">Search</button>
            </form>

            <!-- User Table -->
            <table class="table" id="user-table-body">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <!-- <td>
                            <button class="btn btn-primary view-user" data-user-id="{{ $user->id }}" data-toggle="modal" data-target="#userModal">View</button>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
			@foreach ($users as $user)
    <!-- User Details Modal -->
    <<div class="modal fade" id="userModal_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="user-details"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
	<!-- User Details Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- User details will be displayed here -->
                <div id="user-details">
                    <p>Name: <span id="user-name"></span></p>
                    <p>Email: <span id="user-email"></span></p>
                    <p>Phone: <span id="user-phone"></span></p>
                    <p>Address: <span id="user-address"></span></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach

				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	
	<script>
        $(document).ready(function () {
            // Function to filter users in the table
            function filterUsers(searchTerm) {
                var $userRows = $("#user-table-body tr");

                // Show or hide rows based on the search input
                $userRows.each(function () {
                    var userName = $(this).find("td:first-child").text().toLowerCase(); // Assumes name is in the first column
                    if (userName.includes(searchTerm.toLowerCase())) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Listen for changes in the search input
            $("input[name='search']").on("input", function () {
                var searchTerm = $(this).val();
                filterUsers(searchTerm);
            });

            $(".view-user").click(function () {
            var userId = $(this).data("user-id");
            var url = "{{ route('admin.getUserDetails', '') }}/" + userId;
            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    // Update the modal content for the specific user
                    $("#userModal_" + userId).html(response);
                    $("#userModal_" + userId).modal("show"); // Show the modal
                },
                error: function (error) {
                    console.error(error);
                }
            });
        });
    });
    </script>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="assets/js/admin.js"></script> 

  

</body>
</html>
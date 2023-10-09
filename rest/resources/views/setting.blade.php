<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/settings.css">
    <title>Settings</title>

  
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
<div class="container">
        <header>Settings</header>
        <form action="{{ route('updatep') }}" method="POST">
    @csrf
    @method('PUT')
            <div class="form first">
                <div class="details personal">
                    <span class="title">Edit Profile</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your first name" name="name" value="{{ $user->name }}" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your email" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="mb-3">
            <label for="newpw" class="form-label">Contact No</label>
            <input type="text" placeholder="Enter your email" name="phone" value="{{ $user->phone }}" >
            </div>

            <div class="mb-3">
            <label for="newpw" class="form-label">Address</label>
            <input type="text" placeholder="Enter your email" name="address" value="{{ $user->address }}" >
            </div>


                        <br><br><br>
                        <button  type="submit" class="saveBtn">
                        <span class="btnText">Save</span>
                        <i class="uil uil-navigator"></i>
                    </button>

                    </div>
               </form>
                </div>
                <form method="POST" action="{{ route('change-password', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data">
        @csrf    
        <div class="modal-body">
            <!--form start -->
            <div class="mb-3">
            <label for="oldpw" class="form-label">Old Password</label>
            <input id="oldPassword" type="password" class="form-control" name = "oldpw" placeholder="Enter your old password">
            <p id="confirmOldPassword" style="color: red; display: none;">Incorrect password</p>
            </div>
            
            <div class="mb-3">
            <label for="newpw" class="form-label">New Password</label>
            <input type="password" class="form-control" id="psw" name="newpw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required placeholder="Enter a password that meets the criteria">
            </div>
            <div id="criteria">
            New password must contain the following:
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="specialChar" class="invalid">A <b>special character</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
            <div class="mb-3">
                <label for="cpw" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" name="cpw" id="confirmPassword" placeholder="Re-enter new password">
                <p id="confirmErrorMessage" style="color: red; display: none;">Passwords do not match</p>
            </div>

            
            <!-- end of form -->

        </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
						<i class="uil uil-navigator"></i>
					</button>
                    <button type="cancel" class="cancel"> <a href="{{url('admin')}}" style= "text-decoration: none; color: white;">
						<span >Cancel</span>
						</a>
					</button>

                    </div>
                   


                </div>
            </div>
            <button type="button" class="backBtn" onclick="goBack()">
        <span class="btnText">Back</span>
        <i class="uil uil-navigator"></i>
    </button>


            <script>
                /*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink() {
    if (linkColor) {
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
    }
}
linkColor.forEach(l => l.addEventListener('click', colorLink))
      </script>
      <script>
        var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("criteria").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("criteria").style.display = "none";
}

//confirm password not matching new password error
var confirmPasswordInput = document.getElementById("confirmPassword");
var confirmErrorMessage = document.getElementById("confirmErrorMessage");

confirmPasswordInput.onkeyup = function() {
    if (confirmPasswordInput.value !== myInput.value) {
        confirmErrorMessage.style.display = "block";
    } else {
        confirmErrorMessage.style.display = "none";
    }
};


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
    // console.log("passwordddd");
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }




    // Validate length
    if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }

    var specialCharacters = /[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/@#]/g;
    if (myInput.value.match(specialCharacters)) {
        specialChar.classList.remove("invalid");
        specialChar.classList.add("valid");
    } else {
        specialChar.classList.remove("valid");
        specialChar.classList.add("invalid");
    }


}
function goBack() {
        window.history.back();
    }
    function goBack() {
        window.history.back();
    }
      </script>
            </script>

            @if(session('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
            @endif
           
</body>
</html>
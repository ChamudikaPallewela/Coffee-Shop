let menu = document.querySelector('.menu')
let sidebar = document.querySelector('.sidebar')
let mainContent = document.querySelector('.main--content')

menu.onclick = function() {
    sidebar.classList.toggle('active')
    mainContent.classList.toggle('active')
}

//logout
$(document).ready(function() {
    $('.logout').click(function(e) {
        e.preventDefault();
        $('#logout-form').submit();
    });
});
function confirmLogout() {
    if (window.confirm('Are you sure you want to logout?')) {
        document.getElementById('logout-form').submit();
    }

	
}
function confirmDelete(event) {
    event.preventDefault();

    
    if (confirm("Are you sure you want to delete this food from menu?")) {
    
      window.location.href = event.target.parentElement.href;

      
      showSuccessMessage();
    }
  }

  // Function to show the success message
  function showSuccessMessage() {
    // You can customize the success message here
    alert("Deletion was successful!");
  }
  function confirmDelete1(event) {
    event.preventDefault();

    
    if (confirm("Are you sure you want to delete this Chef?")) {
    
      window.location.href = event.target.parentElement.href;

      
      showSuccessMessage();
    }
  }

  // Function to show the success message
  function showSuccessMessage() {
    // You can customize the success message here
    alert("Deletion was successful!");
  }
  
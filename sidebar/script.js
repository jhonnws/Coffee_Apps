const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

document.getElementById('logout-link').addEventListener('click', function(e) {
  // Prevent the default action of the link
  e.preventDefault();
  
  // Show the confirmation dialog
  const isConfirmed = confirm("Are you sure you want to log out?");
  
  // If the user confirms, redirect to the logout page or perform logout action
  if (isConfirmed) {
      window.location.href = "../apps/dasboard.php"; // Change this to your logout action URL
  }
});

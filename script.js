const navBar = document.querySelector(".navbar");

// Menu di klik
document.querySelector("#menu").onclick = () => {
  navBar.classList.toggle("active");
};

// Klik luar sidebar untuk menghilangkan menu

const Menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!Menu.contains(e.target) && !navBar.contains(e.target)) {
    navBar.classList.remove("active");
  }
});


var buttons = document.querySelectorAll(".menu-card-button");


buttons.forEach(function(button) {
  var modalId = button.getAttribute("data-modal-target");
  var modal = document.getElementById(modalId);
  var span = modal.getElementsByClassName("close")[0];

  
  button.onclick = function() {
    modal.style.display = "block";
  }

  
  span.onclick = function() {
    modal.style.display = "none";
  }

  
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});


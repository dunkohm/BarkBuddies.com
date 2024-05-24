document.addEventListener("DOMContentLoaded", function() {
    // Hide preloader and show content after a delay
    var preloader = document.querySelector(".preloader-container");
    var content = document.getElementById("content");
  
    // Hide preloader after 3 seconds (adjust delay as needed)
    setTimeout(function() {
      preloader.style.display = "none";
      content.style.display = "block";
    }, 3000); // 3000 milliseconds = 3 seconds
  });
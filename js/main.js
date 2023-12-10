let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

function showAlert() {
   alert("Thank you so much!");
}

// Wait for the document to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
   // Find the button element by its class or ID for the booking form
   var bookingButton = document.querySelector(".booking .btn");

   // Add a click event listener to the booking form button
   if (bookingButton) {
      bookingButton.addEventListener("click", function() {
         // Call the showAlert function when the booking form button is clicked
         showAlert();
      });
   }

   // Find the button element by its class or ID for the packages section
   var loadMoreBtn = document.querySelector('.packages .load-more .btn');

   // Add a click event listener to the load more button in the packages section
   if (loadMoreBtn) {
      loadMoreBtn.addEventListener('click', function() {
         let boxes = [...document.querySelectorAll('.packages .box-container .box')];
         let currentItem = 3;

         for (var i = currentItem; i < currentItem + 3; i++) {
            if (boxes[i]) {
               boxes[i].style.display = 'inline-block';
            }
         }
         

         currentItem += 3;

         if (currentItem >= boxes.length) {
            loadMoreBtn.style.display = 'none';
         }
      });
   }
});
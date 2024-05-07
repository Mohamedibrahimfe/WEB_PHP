const menu = document.querySelector('#mobile-menu');
const navBarLinks = document.querySelector('.navbar-menu');
const navLogo = document.querySelector('#navbar-logo');
const documentBody = document.querySelector('body');
const mobileMenu = function () {
    menu.classList.toggle('is-active');
    navBarLinks.classList.toggle('is-active');
    documentBody.classList.toggle('active');
};
menu.addEventListener('click', mobileMenu)


// Amr
// let add_notes=document.getElementById('add_notes');
// let top_note=document.querySelector('.top_note');
// let containe=document.querySelector('.containe');
// let notes=document.querySelector('.notes');
// let del=document.querySelector('.delete');


// append the text box
// function add_note(){
//     add_notes.style.display='block';
// }


// // add note by double click
// add_notes.addEventListener('dblclick',()=>{
//     if(add_notes.value!=''){
//         let note=document.createElement('div');
//         note.className='newnote'
//         note.innerHTML=`
//         <div >${add_notes.value}</div>
//         `

//         containe.appendChild(note);
//         add_notes.value='';
//         // add_notes.style.display='none'

//         // remove note by double click
//         note.addEventListener('dblclick',()=>{
//             note.remove();
//         })

//     }
//     else {
//         add_notes.innerHTML=''
//         add_notes.style.display='none' ;
//     }
// })
//

$(document).ready(function(){
    var cardWidth = $('.card').outerWidth(); // Get the width of each card
    var visibleCards = 5; // Number of cards to display at a time
    var totalCards = $('.card').length; // Total number of cards
    var sliderWidth = cardWidth * visibleCards; // Width of the slider

// Set the width of the slider container to accommodate the visible cards

$('.slider').width(sliderWidth)


// Function to move to the next slide

function nextSlide () {
  $('.cards').animate(
    {
      // Slide to the next position
      scrollLeft: '+=' + cardWidth
    },
    500,
    function () {
      $('.cards').append($('.cards .card:first')) // Move the first card to the end
      $('.cards').scrollLeft(0) // Reset the position
    }
  )
}


// Function to move to the previous slide

function prevSlide () {
  $('.cards').prepend($('.cards .card:last')) // Move the last card to the beginning
  $('.cards').scrollLeft(cardWidth) // Position the slider to show the last card
  $('.cards').animate(
    {
      // Slide to the previous position
      scrollLeft: '-=' + cardWidth
    },
    500
  )
}


// Set interval for automatic sliding

var intervalId = setInterval(nextSlide, 3000) // Change slide every 3 seconds (adjust as needed)


    // Pause slider when hovering over it
    $('.slider-container').hover(
        function() {
            clearInterval(intervalId); // Pause sliding
        },
        function() {
            intervalId = setInterval(nextSlide, 3000); // Resume sliding after hover
        }
    );

// Navigation buttons

    $('.next').click(nextSlide);
    $('.prev').click(prevSlide);
});

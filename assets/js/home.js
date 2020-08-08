// window,addEventListener("scroll", function(){
//     var nav = document.querySelector("nav");
//     nav.classList.toggle("sticky", window.scrollY > 0);
// });
 
$(document).ready(function () {
    $('.loading-wrapper').fadeOut(1250);
});

$( "#menu-toggle" ).click(function() {
    $( this ).toggleClass( "toggle-rotate");
});

const scrollToTop = document.getElementById('scroll-to-top');
let dataShow = false;
window.addEventListener('scroll', () => {
    if (window.scrollY > 50 && !dataShow) {
        scrollToTop.setAttribute('data-show', 'true');
        dataShow = true;
    }

    if (window.scrollY <= 50 && dataShow) {
        scrollToTop.setAttribute('data-show', 'false');
        dataShow = false;
    }
});
scrollToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// $(function(){
//     $(".card-body").each(function(i){
//       len=$(this).text().length;
//       if(len>20)
//       {
//         $(this).text($(this).text().substr(0,80)+'...');
//       }
//     });
// });
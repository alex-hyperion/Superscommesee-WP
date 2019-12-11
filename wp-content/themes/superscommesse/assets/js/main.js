var toTop = document.getElementById("js_to_top");

toTop.addEventListener("click", function(){
    scrollToTop(400);
});
function scrollToTop(scrollDuration) {
    event.preventDefault();
    var scrollStep = -window.scrollY / (scrollDuration / 15),
        scrollInterval = setInterval(function(){
            if ( window.scrollY != 0 ) {
                window.scrollBy( 0, scrollStep );
            }
            else clearInterval(scrollInterval);
        },15);
}
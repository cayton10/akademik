$(document).ready(function() {

    //Found this on stackoverflow here:
    //https://stackoverflow.com/questions/45685282/one-page-scroll-trying-to-redirect-to-home-page-and-scroll-to-the-div-not-wor
    //Get the hash from the URL
    var hash = window.location.hash;
    //If hash exists && starts with "#scroll:"
    $('html, body').animate({ scrollTop: $(hash).offset().top});
});
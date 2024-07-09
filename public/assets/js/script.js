
$(document).ready(function() {
    // Activer le carrousel
    $('#carouselExample').carousel();

    // Mettre en surbrillance la miniature correspondant à la diapositive active
    $('#carouselExample').on('slide.bs.carousel', function (e) {
        var slideIndex = $(e.relatedTarget).index();
        $('#carouselThumbnails img').removeClass('active');
        $('#carouselThumbnails img[data-slide-to="' + slideIndex + '"]').addClass('active');
    });

    // Défilement horizontal des miniatures
    var scrollDistance = 200; // Ajustez la distance de défilement horizontal selon vos besoins
    var thumbnails = document.getElementById('carouselThumbnails');

    document.getElementById('carouselThumbnails').addEventListener('wheel', function(e) {
        if (e.deltaY > 0) {
            thumbnails.scrollLeft += scrollDistance;
        } else {
            thumbnails.scrollLeft -= scrollDistance;
        }
        e.preventDefault();
    });
});




function highlightStars(starCount) {
    var stars = document.querySelectorAll('.rating > span');
    for (var i = 0; i < starCount; i++) {
        stars[i].innerHTML = '&#9733;'; // étoile pleine
    }
}

function resetStars() {
    var stars = document.querySelectorAll('.rating > span');
    for (var i = 0; i < stars.length; i++) {
        stars[i].innerHTML = '&#9734;'; // étoile vide
    }
}

function submitRating(rating) {
    document.getElementById('currentRating').textContent = rating;
    document.getElementById('ratingMessage').style.display = 'block';
}

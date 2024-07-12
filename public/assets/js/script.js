
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

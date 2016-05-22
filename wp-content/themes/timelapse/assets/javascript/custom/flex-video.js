jQuery( 'iframe[src*="youtube.com"]').wrap("<div class='flex-video widescreen'/>");
jQuery( 'iframe[src*="vimeo.com"]').wrap("<div class='flex-video widescreen vimeo'/>");

$(document).ready(function () {
            $("#testimoniaux").owlCarousel({
                navigation: false,
                slideSpeed: 100,
                paginationSpeed: 800,
                singleItem: true,
                autoPlay: true
            });
        });

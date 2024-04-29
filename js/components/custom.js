$(document).ready(function () {
    var owl = $('#owl-carousel1');
    owl.owlCarousel({
        items: 4, // Number of items to display in desktop view
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2000, // Auto-scroll interval
        responsive: {
            0: {
                items: 1 // Number of items to display in mobile view
            },
            768: {
                items: 1 // Number of items to display in tablet view
            },
            992: {
                items: 4 // Number of items to display in desktop view
            }
        }
    });

    // Stop autoplay on hover
    owl.hover(function () {
        owl.trigger('stop.owl.autoplay');
    }, function () {
        owl.trigger('play.owl.autoplay', [3000]);
    });
});

$(document).ready(function () {
    var owl2 = $('#owl-carousel2');
    owl2.owlCarousel({
        items: 2, // Number of items to display in desktop view
        loop: true,
        margin: 20,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000, // Auto-scroll interval
        responsive: {
            0: {
                items: 1 // Number of items to display in mobile view
            },
            768: {
                items: 1 // Number of items to display in tablet view
            },
            992: {
                items: 2 // Number of items to display in desktop view
            }
        }
    });

    // Stop autoplay on hover
    owl2.hover(function () {
        owl2.trigger('stop.owl.autoplay');
    }, function () {
        owl2.trigger('play.owl.autoplay', [3000]);
    });
});


$(document).ready(function () {
    var owl3 = $('#owl-carousel3');
    owl3.owlCarousel({
        items: 1, // Number of items to display in desktop view
        loop: true,
        margin: 20,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000, // Auto-scroll interval
        responsive: {
            0: {
                items: 1 // Number of items to display in mobile view
            },
            768: {
                items: 1 // Number of items to display in tablet view
            },
            992: {
                items: 1 // Number of items to display in desktop view
            }
        }
    });

    // Stop autoplay on hover
    owl3.hover(function () {
        owl3.trigger('stop.owl.autoplay');
    }, function () {
        owl3.trigger('play.owl.autoplay', [3000]);
    });
});



$(document).ready(function () {
    var owl4 = $('#owl-carousel4');
    owl4.owlCarousel({
        items: 4, // Number of items to display in desktop view
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2000, // Auto-scroll interval
        responsive: {
            0: {
                items: 1 // Number of items to display in mobile view
            },
            768: {
                items: 1 // Number of items to display in tablet view
            },
            992: {
                items: 4 // Number of items to display in desktop view
            }
        }
    });

    // Stop autoplay on hover
    owl4.hover(function () {
        owl4.trigger('stop.owl.autoplay');
    }, function () {
        owl4.trigger('play.owl.autoplay', [3000]);
    });
});

/* Notice board marwuee */


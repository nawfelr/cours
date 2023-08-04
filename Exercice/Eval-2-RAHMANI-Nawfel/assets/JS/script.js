$(document).ready(function () {
    //Carrousel 1

    var pauseInterval = false;

    // set an interval for the slide to run on
    var interval = window.setInterval(rotateSlides, 15000) // Durée du temps de transition du carousel(15sec)

    function rotateSlides() {

        var $firstSlide = $('#carousel').find('div:first');


        var width = $firstSlide.width();


        $firstSlide.animate({ marginLeft: -width }, 1000, function () {

            var $lastSlide = $('#carousel').find('div:last')
            $lastSlide.after($firstSlide);


            $firstSlide.css({ marginLeft: 0 })
        });
    }



    function previousSlide() {
        // Stop the interval from running
        window.clearInterval(interval);
        // Get the current slide
        var $currentSlide = $('#carousel').find('div:first');
        // Get the width of the slide so we know how much to slide by
        var width = $currentSlide.width();
        // Get the previous slide
        var $previousSlide = $('#carousel').find('div:last')
        // Move the previous slide's positition to the front of the queue
        $previousSlide.css({ marginLeft: -width })
        $currentSlide.before($previousSlide);
        // Animate to the previous slide
        $previousSlide.animate({ marginLeft: 0 }, 1000, function () {
            // Resume the interval
            interval = window.setInterval(rotateSlides, 3000);
        });
    }

    function nextSlide() {
        // Stop the interval from running
        window.clearInterval(interval);
        // Get the current slide
        var $currentSlide = $('#carousel').find('div:first');
        // Get the width of the slide so we know how much to slide by
        var width = $currentSlide.width();
        // Animate to the next slide
        $currentSlide.animate({ marginLeft: -width }, 1000, function () {
            // Reorder slides - move the $firstSlide after the last slide
            var $lastSlide = $('#carousel').find('div:last')
            $lastSlide.after($currentSlide);
            // Reset slide position to the end of the queue
            $currentSlide.css({ marginLeft: 0 })
            // Resume the interval
            interval = window.setInterval(rotateSlides, 3000);
        });
    }



    //BOUTTON FOND BLANC

    $('#btn1').click(function () {
        $('#btn1').toggleClass("grey");
    });

//Titre au moment du click
    $('#btn1').click(function () {
        $('#titreCaroussel').toggleClass("none");
    });


    $('#btn1').click(function () {
        $('#container').toggleClass("marge");
    });

});


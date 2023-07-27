// Question 1

$(".reponse").hide();


// Question 2

$('.question').css({
    "background-color": "cyan", // mettre ss forme de string
    "display": "flex",
    "justify-content": "space-between",
    "border": "2px solid green ",
    "margin": "20px auto"
});

$('a').css({

    "margin-left": "170px"
});

$('img').css({

    "height": "140px",
    "width": "140px",
    "margin": "auto 0"
});



// Question 3

$('a').hover(function () {
    if ($("#r1").is(':checked')) {
        $('#reponse1').css({

            "color": "green"
        }),
            $(".reponse").show(),

            $('#img1').attr('src', 'bon.png');
    }
    if ($("#r2, #r3").is(':checked')) {
        $('#reponse1').css({

            "color": "red"
        }),
            $(".reponse").show(),

            $('#img1').attr('src', 'mauvais.png');
    }
    //POUR LA DEUXIEME QUESTION
    if ($("#r4").is(':checked')) {
        $('#reponse2').css({

            "color": "green"
        }),
            $(".reponse").show(),

            $('#img2').attr('src', 'bon.png');
    }
    if ($("#r5, #r6").is(':checked')) {
        $('#reponse2').css({

            "color": "red"
        }),
            $(".reponse").show(),

            $('#img2').attr('src', 'mauvais.png');
    }
    //POUR LA TROISIEME QUESTION
    if ($("#r8").is(':checked')) {
        $('#reponse3').css({

            "color": "green"
        }),
            $(".reponse").show(),

            $('#img3').attr('src', 'bon.png');
    }
    if ($("#r7, #r9").is(':checked')) {
        $('#reponse3').css({

            "color": "red"
        }),
            $(".reponse").show(),

            $('#img3').attr('src', 'mauvais.png');
    }


}, function () {
    $(".reponse").hide();
    $('#img1, #img2,#img3').attr('src', 'question.png');
});



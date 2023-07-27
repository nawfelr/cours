$('#add').click(function () {
    let entre = $('Input').val();
    let li = "<li>" + entre + "</li>"
    $('ul').append(li)
});




$('#supp').click(function () {
    $('li').remove();
});

$('ul').on('click','li',function () {
    $(this).remove();
});

// This correspond a l'element sur lequel on se trouve
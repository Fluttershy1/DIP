
$('#mainForm').submit(function(){

    var photo = $('[name="photo"]').val()

    $('#photo_from').attr('src', "./img/"+photo);
    $('#photo_to').attr('src', "#");

    setTimeout("$('#photo_to').attr('src', './ajax.php?'+$('#mainForm').serialize());", 5)



    return false;

})

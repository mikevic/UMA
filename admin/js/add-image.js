$("#add-image").submit(function() {
    $.post("includes/add-image.php", $("#add-image").serialize(), function(data){
        $("#form-question").slideUp();
        $("#result").html(data);
        $('#add-image')[0].reset();
        $("#form-question").slideDown();

    });
    //Important. Stop the normal POST
    return false;
});
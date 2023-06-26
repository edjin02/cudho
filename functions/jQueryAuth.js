function viewUserData(id){

    $.ajax({
        url: '../functions/Functions.php',
        type : 'POST',
        data : {id : id, action: 'viewUserData'},
        dataType: 'json',
        success : function(result)
        {
            alert("success");
            alert(result.sql);
        },
        error : function(){
            alert('bat ayaw??');
        }
    })
}
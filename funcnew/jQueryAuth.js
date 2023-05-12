$(document).ready(function(){

})

//get value inside modal
function viewUserData(id){

    $.ajax({
        url: '../funcnew/Functions.php',
        type : 'POST',
        data : {id : id, action: 'viewUserData'},
        dataType : 'json',
        success : function(result)
        {
            $('#mode').val('edit');$('#id').val(result.val);
            $('#username').val(result.username);
        }, error : function() {
            alert('Y');
        }
    })
}
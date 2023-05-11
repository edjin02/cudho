$(document).ready(function(){

})

function viewUserData(id){

    $.ajax({
        url: '../allfunction.php',
        type : 'POST',
        data : {id : id, action: viewUserData},
        dataType : 'json',
        success : function(result)
        {
            $('#mode').val('edit');$('#id').val(result.val)
        }, error : function() {
            alert('Y');
        }
    })
}
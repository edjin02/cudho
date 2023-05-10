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
            
        }
    })
}
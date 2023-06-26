$(document).ready(function() {
    alert("yow");
    showUserList('showUserData');
})

function showUserList(x) {
    alert("yowaw");
    var action;
    var body;

    var id = $("#id").val();

    if (x === 'showUserData') {
        action = 'showUserData';
        body = '#userTable';
    }

    $.ajax({
        url: '../funcnew/functionSelect.php',
        type: 'POST',
        data: {
            action: action,
            id: id
        },
        dataType: 'html',
        success: function(result) {
            alert("yowawiwa");
            alert(result);
            $(body).html(result);
        }
    });
}

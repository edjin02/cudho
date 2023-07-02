// final to show user data on the table need to call
$(document).ready(function() {
    // alert("yow");
    showVerifList('showVerifData');
    showUserList('showUserData');
    // showFamList('showFamData');
})

function showVerifList(x) {
    // alert("yowaw");
    var action;
    var body;

    var id = $("#id").val();

    if (x === 'showVerifData') {
        action = 'showVerifData';
        body = '#verifTable';
    }

    $.ajax({
        url: '../functions/functionSelect.php',
        type: 'POST',
        data: {
            action: action,
            id: id
        },
        dataType: 'html',
        success: function(result) {
            // alert("yowawiwa");
            // alert(result);
            $(body).html(result);
        }
    });
}

function showUserList(x) {
    // alert("yowaw");
    var action;
    var body;

    var id = $("#id").val();

    if (x === 'showUserData') {
        action = 'showUserData';
        body = '#userTable';
    }

    $.ajax({
        url: '../functions/functionSelect.php',
        type: 'POST',
        data: {
            action: action,
            id: id
        },
        dataType: 'html',
        success: function(result) {
            // alert("yowawiwa");
            // alert(result);
            $(body).html(result);
        }
    });
}

// function showFamList(x) {
//     var action;
//     var body;

//     var id = $("#id").val();

//     if (x === 'showFamData') {
//         action = 'showFamData';
//         body = '#famTable';
//     }

//     $.ajax({
//         url: '../functions/functionSelect.php',
//         type: 'POST',
//         data: {
//             action: action,
//             id: id
//         },
//         dataType: 'html',
//         success: function(result) {
//             $(body).html(result);
//         }
//     });
// }





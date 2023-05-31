$(document).ready(function() {
    showFamList('showFamData');
    alert("readable");
});

function showFamList(action) {
    var id = $("#id").val();
    var body = '#famTable';
    alert("gumana");

    // Pass the selected ID to the AJAX request
    $.ajax({
        url: '../memberviewcomponent/functionSelect.php',
        type: 'POST',
        data: {
            action: action,
            id: id
        },
        dataType: 'html',
        success: function(result) {
            alert(result);
            $(body).html(result);
        }
    });
}



// function showResponseList(x) {
//     // alert("yowaw");
//     var action;
//     var body;

//     var id = $("#id").val();

//     if (x === 'showResponseData') {
//         action = 'showResponseData';
//         body = '#responseTable';
//     }

//     $.ajax({
//         url: '../memberviewcomponent/functionSelect.php',
//         type: 'POST',
//         data: {
//             action: action,
//             id: id
//         },
//         dataType: 'html',
//         success: function(result) {
//             // alert("yowawiwa");
//             // alert(result);
//             $(body).html(result);
//         }
//     });
// }
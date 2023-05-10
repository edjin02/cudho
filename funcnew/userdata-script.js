// $(document).ready(function() {
//     // Call the PHP file to retrieve data
//     $.ajax({
//         url: "userData.php",
//         type: "GET",
//         dataType: "json",
//         success: function(data) {
//             // Populate the table with the retrieved data
//             $.each(data, function(key, value) {
//                 var tr = "<tr data-toggle='modal' data-target='#editModal' data-id='" + value.id + "'>";
//                 tr += "<td>" + value.isactive + "</td>";
//                 tr += "<td>" + value.username + "</td>";
//                 tr += "<td style='text-align: left'>" + value.firstname + " " + value.middlename + " " + value.lastname + "</td>";
//                 tr += "<td>" + value.contactno + "</td>";
//                 tr += "<td>" + value.memberof + "</td>";
//                 tr += "</tr>";
//                 $('#userTable').append(tr);
//             });
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//             console.log(textStatus, errorThrown);
//         }
//     });
// });

$(document).ready(function() {
    $.ajax({
        url: 'userData.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $.each(data, function(i, user) {
                var name = user.name ? user.name : '-';
                var trHTML = '<tr data-toggle="modal" data-target="#editModal" data-id="' + user.id + '">' +
                    '<td>' + user.isactive + '</td>' +
                    '<td>' + user.username + '</td>' +
                    '<td style="text-align: left">' + name + '</td>' +
                    '<td>' + user.contactno + '</td>' +
                    '<td>' + user.memberof + '</td>' +
                '</tr>';
                $('#userTable').append(trHTML);
            });
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});
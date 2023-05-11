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
        url: '../funcnew/userData.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $.each(data, function(i, user) {
                // create table row and populate with user data
                var name = user.name ? user.name : '-';
                var trHTML = '<tr data-toggle="modal" data-target="#editUserModal" data-id="' + user.id + '" data-action="userDisplay">' +
                    '<td>' + user.isactive + '</td>' +
                    '<td>' + user.username + '</td>' +
                    '<td style="text-align: left">' + name + '</td>' +
                    '<td>' + user.contactno + '</td>' +
                    '<td>' + user.memberof + '</td>' +
                '</tr>';

                $('#userTable').append(trHTML);
        
                // attach click event handler to table row
                $('#userTable').on('click', 'tr', function() {
                    // retrieve user ID from data attribute
                    var action = $(this).data('action');
                    var userId = $(this).data('id');

                    $.ajax({
                        url: '../funcnew/userData.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action: action,
                            id: userId
                        },
                        success: function(data) {
                            // populate edit modal with user data
                            $('#editUserModal #userId').val(data.id);
                            $('#editUserModal #username').val(data.username);
                            $('#editUserModal #name').val(data.name);
                            $('#editUserModal #contactno').val(data.contactno);
                            $('#editUserModal #memberof').val(data.memberof);
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                        }
                    });

                });
            });
        }
    });
});

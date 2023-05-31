$(document).ready(function() {
    $('#login-form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        $.ajax({
            url: '../include/loginfunc_inc.php',
            method: 'POST',
            data: $('#login-form').serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Redirect the user to the homepage
                    window.location.href = 'index.php';
                } else {
                    // Display an error message
                    alert(response.message);
                }
            },
            error: function() {
                // Display a generic error message
                alert('An error occurred while processing the request.');
            }
        });
    });

    $.ajax({
        url: '../include/verify-data_inc.php',
        dataType: 'json',
        success: function(data) {
            var tableData = '';
            $.each(data, function(key, value) {
                tableData += '<tr data-searchable="' + value.tag + ' ' + value.firstname + ' ' + value.middlename + ' ' + value.lastname + ' ' + value.samahan + ' ' + value.barangay + ' ' + value.monthly_income + '" data-href="memberview.php?id=' + encodeURIComponent(value.id) + '"><td>' + value.tag + '</td><td>' + value.firstname + ' ' + value.middlename + ' ' + value.lastname + '</td><td>' + value.samahan + '</td><td>' + value.barangay + '</td><td>' + value.monthly_income + '</td></tr>';
            });
            $('#record-data').append(tableData);
    
            // add click event handler to each table row
            $('#record-data tr').on('click', function() {
                window.location.href = $(this).data('href');
            });
        }
    });
    
    $.ajax({
            url: "../include/useracc_inc.php",
            type: "GET",
            dataType: "json",
            success: function(data){
                var html = "";

                for(var i = 0; i < data.length; i++){
                    html += "<tr data-toggle='modal' data-target='#editModal' onclick='displayRowData(this)'>";
                    html += "<td>" + data[i].isactive + "</td>";
                    html += "<td>" + data[i].username + "</td>";
                    html += "<td style='text-align: left'>" + data[i].firstname + " " + data[i].middlename + " " + data[i].lastname + "</td>";
                    html += "<td>" + data[i].contactno + "</td>";
                    html += "<td>" + data[i].memberof + "</td>";
                    html += "</tr>";
                }
                

                $("#user-data").html(html);
            },
            error: function(xhr, status, error){
                console.log(xhr.responseText);
            }
        });
});

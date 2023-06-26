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
                tableData += '<tr data-searchable="' + value.tag + ' ' + value.firstname + ' ' + value.middlename + ' ' + value.lastname + ' ' + value.samahan + ' ' + value.barangay + ' ' + value.monthly_income + '" onclick="window.location=\'memberview.php?id=' + encodeURIComponent(value.id) + '\';"><td>' + value.tag + '</td><td>' + value.firstname + ' ' + value.middlename + ' ' + value.lastname + '</td><td>' + value.samahan + '</td><td>' + value.barangay + '</td><td>' + value.monthly_income + '</td></tr>';
            });
            $('#table-data').append(tableData);
        }
    });
});

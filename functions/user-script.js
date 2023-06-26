$(document).ready(function () {
  $('#search').on('keyup', function () {
    var searchText = $(this).val().toUpperCase(); // Convert input to uppercase
    filterTable(searchText);
  }).css('text-transform', 'uppercase');
  // Get the checkboxes elements
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Add a click event listener to each checkbox
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('click', function () {
      // Update the value based on the checkbox state
      if (checkbox.checked) {
        checkbox.value = '1';
      } else {
        checkbox.value = '0';
      }
    });

    // Set the initial value based on the checkbox state
    if (checkbox.checked) {
      checkbox.value = '1';
    } else {
      checkbox.value = '0';
    }
  });
  // Select "ADMINISTRATOR" on page load
  $('select[name="memberof"]').val('ADMINISTRATOR');

  // Check all checkboxes on page load and set value to '1'
  $('input[type="checkbox"]').prop('checked', true).val('1');

  // Handle change event of the memberof select element
  $('select[name="memberof"]').change(function () {
    // Get the selected value
    var selectedValue = $(this).val();

    // Check/uncheck checkboxes based on the selected value
    if (selectedValue === "ADMINISTRATOR") {
      $('input[type="checkbox"]').prop('checked', true);
    } else if (selectedValue === "ENCODER") {
      $('input[type="checkbox"]').prop('checked', false);
    }
  });

  function filterTable() {
    var input = document.getElementById("search").value.toLowerCase();
    var rows = document.getElementById("userTable").getElementsByTagName("tr");
    var noDataMessage = document.getElementById("no-data-message");

    var hasMatch = false; // Flag to check if there is a matching row
    
    for (var i = 0; i < rows.length; i++) {
        var username = rows[i].getElementsByTagName("td")[1];
        var fullname = rows[i].getElementsByTagName("td")[2];
        
        if (username || fullname) {
            if (username.innerHTML.toLowerCase().indexOf(input) > -1 || fullname.innerHTML.toLowerCase().indexOf(input) > -1) {
                rows[i].style.display = "";
                hasMatch = true;
            } else {
                rows[i].style.display = "none";
            }
        }
    }
    
    // Show/hide the message based on the flag
    if (hasMatch) {
        noDataMessage.style.display = "none";
    } else {
        noDataMessage.style.display = "";
    }
}

});
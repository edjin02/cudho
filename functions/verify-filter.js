// $(document).ready(function() {
    
    
//     // Function to filter table rows based on user input
//     function filterTable() {
//         var filterBarangay = document.getElementById("barangay-select").value.toUpperCase();
//         var filterSearch = document.getElementById("search").value.toUpperCase();
        

//         var table = document.getElementById("verifTable");
//         var rows = table.getElementsByTagName("tr");
//         var noDataMessage = document.getElementById("no-data-message");

//         var hasData = false; // Variable to track if there is matching data

//         for (var i = 0; i < rows.length; i++) {
//             var row = rows[i];
//             var cells = row.getElementsByTagName("td");
//             var barangayCell = cells[3]; // 4th column (index 3) contains the barangay column data

//             var showRow = true;

//             // Filter by barangay column
//             if (filterBarangay !== "") {
//                 var barangayText = barangayCell.innerText || barangayCell.textContent;
//                 barangayText = barangayText.toUpperCase();

//                 if (barangayText.indexOf(filterBarangay) === -1) {
//                     showRow = false;
//                 }
//             }

//             // Filter by all columns
//             if (filterSearch !== "" && showRow) {
//                 for (var j = 0; j < cells.length; j++) {
//                     var cell = cells[j];
//                     var cellText = cell.innerText || cell.textContent;
//                     cellText = cellText.toUpperCase();

//                     if (cellText.indexOf(filterSearch) !== -1) {
//                         showRow = true;
//                         break;
//                     } else {
//                         showRow = false;
//                     }
//                 }
//             }

//             row.style.display = showRow ? "" : "none";
//             if (showRow) {
//                 hasData = true;
//             }
//         }

//         // Display no data message if there are no matching rows
//         if (!hasData) {
//             noDataMessage.style.display = "block";
//         } else {
//             noDataMessage.style.display = "none";
//         }
//     }

//     // Get the barangay input element
//     var barangayInput = document.getElementById("barangay-select");

//     // Attach an event listener to the barangay input for "input" and "keydown" events
//     barangayInput.addEventListener("input", function() {
//         this.value = this.value.toUpperCase(); // Convert input to uppercase
//         filterTable();
//     });

//     barangayInput.addEventListener("keydown", function(event) {
//         if (event.key === "Tab" || event.key === "Enter") {
//             filterTable();
//         }
//     });
    

//     // Get the search input element
//     var searchInput = document.getElementById("search");

//     // Attach an event listener to the search input
//     searchInput.addEventListener("keyup", function() {
//         this.value = this.value.toUpperCase(); // Convert input to uppercase
//         filterTable();
//     });
// });


$(document).ready(function() {
    // Function to filter table rows based on user input
    function filterTable() {
        var filterBarangay = document.getElementById("barangay-select").value.toUpperCase();
        var filterSearch = document.getElementById("search").value.toUpperCase();
        var filterCommunity = document.getElementById("community-selectSearch").value.toUpperCase(); // New filter input
        
        var table = document.getElementById("verifTable");
        var rows = table.getElementsByTagName("tr");
        var noDataMessage = document.getElementById("no-data-message");

        var hasData = false; // Variable to track if there is matching data

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var cells = row.getElementsByTagName("td");
            var barangayCell = cells[3]; // 4th column (index 3) contains the barangay column data
            var communityCell = cells[4]; // 5th column (index 4) contains the community column data
            
            var showRow = true;

            // Filter by barangay column
            if (filterBarangay !== "") {
                var barangayText = barangayCell.innerText || barangayCell.textContent;
                barangayText = barangayText.toUpperCase();

                if (barangayText.indexOf(filterBarangay) === -1) {
                    showRow = false;
                }
            }

            // Filter by community column
            if (filterCommunity !== "" && showRow) {
                var communityText = communityCell.innerText || communityCell.textContent;
                communityText = communityText.toUpperCase();

                if (communityText.indexOf(filterCommunity) === -1) {
                    showRow = false;
                }
            }

            // Filter by all columns
            if (filterSearch !== "" && showRow) {
                for (var j = 0; j < cells.length; j++) {
                    var cell = cells[j];
                    var cellText = cell.innerText || cell.textContent;
                    cellText = cellText.toUpperCase();

                    if (cellText.indexOf(filterSearch) !== -1) {
                        showRow = true;
                        break;
                    } else {
                        showRow = false;
                    }
                }
            }

            row.style.display = showRow ? "" : "none";
            if (showRow) {
                hasData = true;
            }
        }

        // Display no data message if there are no matching rows
        if (!hasData) {
            noDataMessage.style.display = "block";
        } else {
            noDataMessage.style.display = "none";
        }
    }

    // Get the barangay input element
    var barangayInput = document.getElementById("barangay-select");

    // Attach an event listener to the barangay input for "input" and "keydown" events
    barangayInput.addEventListener("input", function() {
        this.value = this.value.toUpperCase(); // Convert input to uppercase
        filterTable();
    });

    barangayInput.addEventListener("keydown", function(event) {
        if (event.key === "Tab" || event.key === "Enter") {
            filterTable();
        }
    });

    // Get the search input element
    var searchInput = document.getElementById("search");

    // Attach an event listener to the search input
    searchInput.addEventListener("keyup", function() {
        this.value = this.value.toUpperCase(); // Convert input to uppercase
        filterTable();
    });

    // Get the community-selectSearch input element
    var communityInput = document.getElementById("community-selectSearch");

    // Attach an event listener to the community-selectSearch input
    communityInput.addEventListener("keyup", function() {
        this.value = this.value.toUpperCase(); // Convert input to uppercase
        filterTable();
    });
});

// $(document).ready(function() {
//    const searchInput = $('#search');
//    const tableData = $('#getVerifData');
//    const barangaySelect = $('#barangay-select');

//    function updateTableData() {
//        let selectedBarangay = barangaySelect.val();
//        const searchText = searchInput.val().trim().toUpperCase();

//        if (selectedBarangay === '') {
//            selectedBarangay = null;
//        }

//        let showAll = false;
//        if (selectedBarangay || searchText) {
//            tableData.find('tbody tr').each(function() {
//                const rowBarangay = $(this).find('td:eq(3)').text();
//                const rowSearchable = $(this).find('td:not(.text-center)').text().toUpperCase();
//                let showRow = false;

//                if (selectedBarangay === null) {
//                    showRow = rowSearchable.indexOf(searchText) >= 0;
//                } else {
//                    showRow = rowBarangay == selectedBarangay && rowSearchable.indexOf(searchText) >= 0;
//                }

//                $(this).toggle(showRow);
//                if (showRow) {
//                    showAll = true;
//                }
//            });
//        } else {
//            tableData.find('tbody tr').show();
//            showAll = true;
//        }

//        if (!showAll) {
//            tableData.hide();
//        } else {
//            tableData.show();
//        }
//    }

//    updateTableData();

//    barangaySelect.on('change', function() {
//        updateTableData();
//    });

//    searchInput.on('keyup input', function() {
//        this.value = this.value.toUpperCase();
//        updateTableData();
//    });
// });

$(document).ready(function() {
   const searchInput = $('#search');
   const tableData = $('#getVerifData');
   const barangaySelect = $('#barangay-select');

   function updateTableData() {
       let selectedBarangay = barangaySelect.val();
       const searchText = searchInput.val().trim().toUpperCase();

       if (selectedBarangay === '') {
           selectedBarangay = null;
       }

       let showAll = false;
       if (selectedBarangay || searchText) {
           tableData.find('tbody tr').each(function() {
               const rowBarangay = $(this).find('td:eq(3)').text();
               const rowSearchable = $(this).find('td:not(.text-center)').text().toUpperCase();
               let showRow = false;

               if (selectedBarangay === null) {
                   showRow = rowSearchable.indexOf(searchText) >= 0;
               } else {
                   showRow = rowBarangay == selectedBarangay && rowSearchable.indexOf(searchText) >= 0;
               }

               $(this).toggle(showRow);
               if (showRow) {
                   showAll = true;
               }
           });
       } else {
           tableData.find('tbody tr').show();
           showAll = true;
       }

       if (!showAll) {
           tableData.hide();
       } else {
           tableData.show();
       }
   }

   updateTableData();

   barangaySelect.on('change', function() {
       updateTableData();
   });

   searchInput.on('keyup input', function() {
       this.value = this.value.toUpperCase();
       updateTableData();
   });
});


function setModalValues() {
  $('.row-clickable').click(function() {
    var firstname = $(this).find('td:nth-child(1)').text();
    var lastname = $(this).find('td:nth-child(2)').text();
    var middlename = $(this).find('td:nth-child(3)').text();
    

    // Set the values of the input fields in the modal
    $('#editFamilyModal').find('#firstname').val(firstname);
    $('#editFamilyModal').find('#lastname').val(lastname);
    $('#editFamilyModal').find('#middlename').val(middlename);

    // Show the modal
    $('#editFamilyModal').modal('show');
  });
}
$(document).ready(function() {
  setModalValues();
});

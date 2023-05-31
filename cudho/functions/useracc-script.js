function setModalValues() {
    $('.row-clickable').click(function() {
      var isactive = $(this).find('td:nth-child(1)').text();
      var username = $(this).find('td:nth-child(2)').text();
    //   var middlename = $(this).find('td:nth-child(3)').text();
  
      // Set the values of the input fields in the modal
      $('#editModal').find('#isactive').val(isactive);
      $('#editModal').find('#username').val(username);
    //   $('#editModal').find('#middlename').val(middlename);
  
      // Show the modal
      $('#editModal').modal('show');
    });
  }
  $(document).ready(function() {
    setModalValues();
  });
  
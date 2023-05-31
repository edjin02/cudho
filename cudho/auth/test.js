  window.addEventListener('DOMContentLoaded', validateDates)

  function validateDates() {
    var form = document.getElementById('myForm');
    var startDateInput = document.getElementById('startdate');
    var endDateInput = document.getElementById('enddate');

    form.addEventListener('submit', function(event) {
      var startDate = new Date(startDateInput.value);
      var endDate = new Date(endDateInput.value);

      if (endDate < startDate) {
        event.preventDefault(); 
        alert("AAAAAAAAAAAAAAAAAAAAAAAAA");
      }
    });
  }

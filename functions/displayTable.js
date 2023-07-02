

function work(){
    var work_lastName = document.getElementById("work_lastName");
    
    var editWorkBtns = document.querySelectorAll('tr.editWorkBtn');
    editWorkBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
        var minor_value = this.getAttribute('minor-value');
        var head_value = this.getAttribute('head-value');
        var tbl_value = this.getAttribute('tbl-value');

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../inc_backend/get_work_inc.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var workResp = JSON.parse(xhr.responseText);
                work_lastName.value = workResp.lastname;

            }
        };
        xhr.send('head_value=' + encodeURIComponent(head_value) + '&minor_value=' + encodeURIComponent(minor_value) + '&tbl_value=' + encodeURIComponent(tbl_value));
    });
});
}
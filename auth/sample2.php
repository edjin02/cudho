<!DOCTYPE html>
<html>
<head>
	<title>Clickable Table with Modal</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h2>Clickable Table with Modal</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Value</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Generate rows with values starting from 0 to 9
				for ($i=0; $i<10; $i++) {
					echo "<tr class='clickable-row' data-toggle='modal' data-target='#myModal' data-value='$i'>";
					echo "<td>".($i+1)."</td>";
					echo "<td>".$i."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Value</h4>
            </div>
            <div class="modal-body">
                <p id="modal-value">Loading...</p>
                <script>
                    $(document).ready(function(){
                        $(".clickable-row").click(function(){
                            var value = $(this).data("value");
                            $.ajax({
                                url: "sample4.php",
                                method: "POST",
                                data: { value: value },
                                success: function(response) {
                                    // Update the modal body with the response
                                    $("#modal-value").html(response);
                                    
                                    // Show the modal
                                    $("#myModal").modal("show");
                                }
                            });
                        });
                    });
                </script>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>















</body>
</html>
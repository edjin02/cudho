<!DOCTYPE html>
<html>
<head>
	<title>Modal Example with Button and Placeholder</title>
	<style>
		.modal {
			display: none; 
			position: fixed; 
			z-index: 1; 
			padding-top: 100px; 
			left: 0;
			top: 0;
			width: 100%; 
			height: 100%; 
			overflow: auto; 
			background-color: rgba(0,0,0,0.4); 
		}

		.modal-content {
			background-color: green;
			margin: auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
		}

		.close {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h2>Modal Example with Button and Placeholder</h2>
	<button onclick="openModal()">Open Modal</button>

	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close" onclick="closeModal()">&times;</span>
			<form>
				<label for="inputName">Name:</label><br>
				<input type="text" id="inputName" name="inputName" placeholder="Enter your name"><br><br>
				<label for="inputEmail">Email:</label><br>
				<input type="email" id="inputEmail" name="inputEmail" placeholder="Enter your email"><br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>

	<script>
		function openModal() {
			document.getElementById("myModal").style.display = "block";
		}

		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}
	</script>
</body>
</html>

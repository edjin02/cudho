<!DOCTYPE html>
<html>
<head>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .page {
      display: none;
    }

    .page.active {
      display: block;
    }
  </style>
</head>
<body>

<button onclick="openModal()">Open Modal</button>

<div id="modal" class="modal">
  <div class="modal-content">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="page" id="page1">
        <h1>Page 1</h1>
        <input type="text" name="input1" id="input1">
        <button type="button" onclick="nextPage()">Next</button>
      </div>

      <div class="page" id="page2">
        <h1>Page 2</h1>
        <input type="text" name="input2" id="input2">
        <button type="button" onclick="prevPage()">Back</button>
        <button type="button" onclick="nextPage()">Next</button>
      </div>

      <div class="page" id="page3">
        <h1>Page 3</h1>
        <input type="text" name="input3" id="input3">
        <button type="button" onclick="prevPage()">Back</button>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

<script>
  let currentPage = 1;
  const totalPages = 3;

  function openModal() {
    document.getElementById("modal").style.display = "block";
    showPage(currentPage);
  }

  function nextPage() {
    if (currentPage < totalPages) {
      currentPage++;
      showPage(currentPage);
    }
  }

  function prevPage() {
    if (currentPage > 1) {
      currentPage--;
      showPage(currentPage);
    }
  }

  function showPage(pageNumber) {
    const pages = document.getElementsByClassName("page");
    for (let i = 0; i < pages.length; i++) {
      pages[i].classList.remove("active");
    }
    document.getElementById("page" + pageNumber).classList.add("active");
  }
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input1 = $_POST["input1"];
  $input2 = $_POST["input2"];
  $input3 = $_POST["input3"];

  echo "<h2>Submitted Values:</h2>";
  echo "Input 1: " . $input1 . "<br>";
  echo "Input 2: " . $input2 . "<br>";
  echo "Input 3: " . $input3 . "<br>";
}
?>

</body>
</html>

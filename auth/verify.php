<?php include ('nav-bar.php');  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CUDHO | Dashboard </title>
    
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    
    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    
    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/dist/css/adminlte.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">

</head>
<body>


<style>
    * {
        font-family: Arial, sans-serif;
    }
    .chead-color
    {
        background-color:maroon; 
        color:white;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; 
        height: 135px;
        padding: 1rem;
        text-align: center;
    }
    .chead-text
    {
        font-size: 20px;
        font-weight: 300;
        margin-bottom: 0;
        margin-top: 5px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        text-align: center;
        padding: 8px;
        border: 1px solid #ddd;
    }
    
    th:nth-child(1) {
        width: 5%;
    }
    
    th:nth-child(2) {
        width: 25%;
    }
    
    th:nth-child(3) {
        width: 40%;
    }
    
    th:nth-child(4) {
        width: 20%;
    }
    
    th:nth-child(5) {
        width: 10%;
    }

    td:hover{
      cursor: pointer;
    }
    
</style>




 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 820px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-1 text-dark">Search Record <a style="font-size:16px">Verify, Search or/and Add a new Member</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Records</a></li>
                            <li class="breadcrumb-item">Verification</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->
        
        <div class="content">
            <div class="col-md-15">
                <div class="card card" >
                    <div class="card-header" style="background-color:maroon;"></div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="form-group" >
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span class="fas  fa-users"></span>
                                </div>

                                <div class="input-group-append">
                                    <input type="search" id="search" class="form-control" style="width: 600px" name="search" placeholder="search">
                                    </div>
                                </div>
                            </div>
                        
                        <div class="col-sm-2">
                            <div class="form-group">
                            <select id="barangay-select" class="select2 select2-hidden-accessible" style="width: 100%; height: 36px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="0"></option>
                                <option value="Aplaya" data-select2-id="1">Aplaya</option>
                                <option value="Balibago" data-select2-id="2">Balibago</option>
                                <option value="Caingin" data-select2-id="3">Caingin</option>
                                <option value="Dila" data-select2-id="4">Dila</option>
                                <option value="Dita" data-select2-id="5">Dita</option>
                                <option value="Don Jose" data-select2-id="6">Don Jose</option>
                                <option value="Ibaba" data-select2-id="7">Ibaba</option>
                                <option value="Kanluran" data-select2-id="8">Kanluran </option>
                                <option value="Labas" data-select2-id="9">Labas</option>
                                <option value="Macabling" data-select2-id="10">Macabling</option>
                                <option value="Malitlit" data-select2-id="11">Malitlit</option>
                                <option value="Malusak" data-select2-id="12">Malusak </option>
                                <option value="Market Area" data-select2-id="13">Market Area</option>
                                <option value="Pooc" data-select2-id="14">Pooc </option>
                                <option value="Pulong Santa Cruz" data-select2-id="15">Pulong Santa Cruz</option>
                                <option value="Santo Domingo" data-select2-id="16">Santo Domingo</option>
                                <option value="Sinalhan" data-select2-id="17">Sinalhan</option>
                                <option value="Tagapo" data-select2-id="18">Tagapo</option>
                            </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#myModal" style="height:36px; width:100px; color:white; background-color:maroon">
                            Add
                        </button>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                        </div>
                        <div class="card" style="margin-left:25px; margin-right:25px">
                          <div class="card-header" style="background-color:maroon; padding:1px">

                          </div>
                          <div class="card-body" style="padding:5px">
                          <div class="row">
                            <div class="col-12">
                            <div class="card">
                            <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead style="background-color: #ffcc00">
                            <tr>
                            <th>Tag</th>
                            <th>Household Head</th>
                            <th>Samahan</th>
                            <th>Barangay</th>
                            <th>Monthly Income</th>
                            </tr>
                            </thead>
                            <tbody id="table-data">
                            <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $database = "cudho";

                              $connection = new mysqli($servername,$username,$password,$database);

                              if ($connection->connect_error){
                                  die("Connection failed ". $connection->connect_error);
                              }

                              $sql = "SELECT * FROM table_verification";
                              $result = $connection->query($sql);
                         
                              while($row = $result->fetch_assoc()){
                                echo "<tr data-searchable=\"" . $row["tag"] . " " . $row["household_head"] . " " . $row["samahan"] . " " . $row["barangay"] . " " . $row["monthly_income"] . "\" onclick=\"window.location='memberview.php?tag=" . urlencode($row['tag']) . "&head=" . urlencode($row['household_head']) . "&samahan=" . urlencode($row['samahan']) . "&barangay=" . urlencode($row['barangay']) . "&income=" . urlencode($row['monthly_income']) . "';\"><td>" . $row["tag"] . "</td>
                                    <td>" . $row["household_head"] . "</td>
                                    <td>" . $row["samahan"] . "</td>
                                    <td>" . $row["barangay"] . "</td>
                                    <td>" . $row["monthly_income"] . "</td>
                                </tr>";
                            }
                            
                            ?>
                            </tbody>
                            </table>
                            </div>

                            </div>

                            </div>
                            </div>
                          </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script>
    
    const searchInput = document.getElementById('search');
    const tableData = document.getElementById('table-data');
    const barangaySelect = document.getElementById('barangay-select');
    
    searchInput.addEventListener('keyup', function() {
        const searchText = searchInput.value.toUpperCase();
        
        // Loop through all table rows and hide those that don't match the search text
        Array.from(tableData.children).forEach(function(row) {
            const searchableText = row.dataset.searchable.toUpperCase();
            row.style.display = searchableText.indexOf(searchText) >= 0 ? 'table-row' : 'none';
        });
    });
    
    searchInput.addEventListener('input', function() {
        searchInput.value = searchInput.value.toUpperCase();
    });
    
    function updateTableData() {
   var selectedBarangay = $('#barangay-select').val();
   $('#table-data tr').each(function() {
      var rowBarangay = $(this).find('td:eq(3)').text();
      if (rowBarangay == selectedBarangay || selectedBarangay == "") {
         $(this).show();
      } else {
         $(this).hide();
      }
   });
}

$(document).ready(function() {
   updateTableData();

   $('#barangay-select').on('change', function() {
      updateTableData();
   });
});

</script>


</body>
</html>

<?php include ('footer.php'); ?>
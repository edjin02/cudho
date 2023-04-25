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
        table-layout: auto;
        
    }
    
    th, td  {
        font-size:13px;
        height: 0;
        text-align: center;
        padding: 20px;
        border: 1px solid #ddd;
    }
    
    td:nth-of-type(3) {
    word-wrap: break-word;
    white-space: normal;
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

    
    .modal-header {
        background-color: #800000;
        padding: 10px;
    }  

    .modal-title {
        color: #ffffff; 
        margin-left:5px;
    }

    .modal-body {
        padding: 10px;
    }

    .modal-footer {
        background-color: #800000;
        padding: 8px;
    }

 
    
</style>




 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 820px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-1 text-dark">Search Record <a style="font-size:13px">Verify, Search or/and Add a new Member</h4>
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
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addmember">Add Member</h5>
                                    </div>

                                    <form action="../include/addmember_inc.php" method="post">
                                    <div class="modal-body">
                                        <div class="card" style="border: 2px solid maroon;">
                                            <div class="card-body">

                                                <div class="row" style="margin-top:-10px">
                                                    <label style = "margin-right:35px">Tag:</label>
                                                    <label style = "margin-right:360px">Community:</label>
                                                    <label>Barangay:</label>
                                                </div>
                                                
                                                <div class="row">
                                                    <input type="text" name="tag" size = "2" style = "margin-right:10px; height:30px;" placeholder="Tag">
                                                    <input type="text" name="samahan" size = "50" style = "margin-right:10px;height:30px;" placeholder="Community/Samahan">
                                                    
                                                    <div class="form-group" style="width:225px;">
                                                        <select name = "barangay_select" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
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

                                                <div class="row" style="margin-top: 10px;">
                                                    <label style = "margin-right:90px">LastName:</label>
                                                    <label style = "margin-right:90px">FirstName:</label>
                                                    <label style = "margin-right:72px">MiddleName:</label>
                                                    <label style = "margin-right:35px">Extension:</label>
                                                    <label>Marketlist:</label>
                                                </div>

                                                <div class="row">
                                                    <input type="text" name="lastname" size = "15" style = "margin-right:10px; height: 30px;" placeholder="Last Name">
                                                    <input type="text" name="firstname" size = "15" style = "margin-right:10px; height: 30px;" placeholder="First Name">
                                                    <input type="text" name="middlename" size = "15" style = "margin-right:10px; height: 30px;" placeholder="Middle Name">
                                                    <input type="text" name="extension" size = "8" style = "margin-right:10px; height: 30px;" placeholder="Sr. Jr. II III">
                                                    <div class="form-group" style="width:115px;" >
                                                        <select name="masterlist_select" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="" data-select2-id="0"></option>
                                                            <option value="Listed" data-select2-id="1">Listed</option>
                                                            <option value="Not Listed" data-select2-id="2">Not Listed</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row" style="margin-top: 10px;">
                                                    <label style = "margin-right:38px">Gender:</label>
                                                    <label style = "margin-right:80px">Birthday:</label>
                                                    <label style = "margin-right:32px">Civil Status:</label>
                                                    <label style = "margin-right:137px">Occupation:</label>
                                                    <label>Monthly Income:</label>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group" style="width:90px; margin-right:10px;">
                                                        <select name="gender_select" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="" data-select2-id="0"></option>
                                                            <option value="Male" data-select2-id="1">Male</option>
                                                            <option value="Female" data-select2-id="2">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3" style="width:140px; margin-right:10px;">
                                                        <input type="date" name="birthdate_select" class="form-control" name="startdate" style="height: 31px;">
                                                    </div>
                                                    <div class="form-group" style="width:115px; margin-right:10px;">
                                                        <select name="civil_status" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                            <option value="Single" selected="" data-select2-id="0">Single</option>
                                                            <option value="Married" data-select2-id="1">Married</option>
                                                            <option value="Divorced" data-select2-id="2">Divorced</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="occupation" size = "22" style = "margin-right:10px; height: 30px;" placeholder="Occupation">
                                                    <input type="text" name="monthly_income" size = "12" style = "height: 30px;" placeholder="Income" >
                                                </div>

                                                <div class="row" style="margin-top: 10px;">
                                                    <label>
                                                        Membership in:
                                                    </label>
                                                </div>

                                                <div class="row" style="margin-top:-15px;">
                                                    <input type="checkbox" id="pagibigCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                                                    <label for="pagibigCheckbox" style="margin-top:6px; margin-right:30px;">PAGIBIG/HDMF</label>
                                                    
                                                    <input type="checkbox" id="sssCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                                                    <label for="sssCheckbox" style="margin-top:6px; margin-right:30px;">SSS/GSIS</label>

                                                    <input type="checkbox" id="othersCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                                                    <label for="othersCheckbox" style="margin-top:6px; margin-right:30px;">OTHERS</label>
                                                </div>


                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning mr-auto btn-sm" data-dismiss="modal" style="margin-left:10px;">Close</button>
                                        <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-right:10px;">Save</button>
                                    </div>
                                    </form>
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
                                
                                echo "<tr data-searchable=\"" . $row["tag"] . " " . $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"] . " " . $row["samahan"] . " " . $row["barangay"] . " " . $row["monthly_income"] . "\" onclick=\"window.location='memberview.php?id=" . urlencode($row['id']) ."';\"><td>" . $row["tag"] . "</td>
                                    <td>" . $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"] . "</td>
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

<!-- <script>
    
    const searchInput = document.getElementById('search');
    const tableData = document.getElementById('table-data');
    const barangaySelect = document.getElementById('barangay-select');
    
    searchInput.addEventListener('keyup', function() {
   const searchText = searchInput.value.trim().toUpperCase(); // trim whitespace and convert to uppercase
   
   // Loop through all table rows and hide those that don't match the search text
   Array.from(tableData.children).forEach(function(row) {
      const searchableText = row.dataset.searchable.toUpperCase();
      row.style.display = (searchText && searchableText.indexOf(searchText) >= 0) ? 'table-row' : 'none'; // check if searchText is truthy and searchableText contains it
    });
    });

    searchInput.addEventListener('input', function() {
    searchInput.value = searchInput.value.toUpperCase();
    });

    searchInput.addEventListener('input', function() {
        searchInput.value = searchInput.value.toUpperCase();
    });
    
    function updateTableData() {
   var selectedBarangay = $('#barangay-select').val();
   $('#table-data tr').each(function() {
      var rowBarangay = $(this).find('td:eq(3)').text();
      if (selectedBarangay && rowBarangay == selectedBarangay) {
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


</script> -->

<script>    
const searchInput = document.getElementById('search');
const tableData = document.getElementById('table-data');
const barangaySelect = document.getElementById('barangay-select');

function updateTableData() {
   let selectedBarangay = $('#barangay-select').val();
   const searchText = searchInput.value.trim().toUpperCase(); // trim whitespace and convert to uppercase
   
   if (selectedBarangay === '') {
      selectedBarangay = null; // set selected barangay to null if it is blank
   }
   
   let showAll = false;
   if (selectedBarangay || searchText) { // only show table rows if either barangay or search is selected
      $('#table-data tr').each(function() {
         const rowBarangay = $(this).find('td:eq(3)').text();
         const rowSearchable = $(this).attr('data-searchable').toUpperCase();
         let showRow = false;

         if (selectedBarangay === null) {
            // if selected barangay is null, show row if it matches the search input
            showRow = rowSearchable.indexOf(searchText) >= 0;
         } else {
            // show table row if selected barangay matches and row searchable contains search text
            showRow = rowBarangay == selectedBarangay && rowSearchable.indexOf(searchText) >= 0;
         }

         $(this).toggle(showRow); // toggle row visibility
         if (showRow) {
            showAll = true; // if at least one row is shown, set showAll to true
         }
      });
   }
   
   if (!showAll) {
      $('#table-data').hide(); // hide table if no rows are shown
   } else {
      $('#table-data').show(); // show table if at least one row is shown
   }
}



$(document).ready(function() {
   updateTableData();

   $('#barangay-select').on('change', function() {
      updateTableData();
   });

   searchInput.addEventListener('keyup', function() {
      updateTableData();
   });

   searchInput.addEventListener('input', function() {
      searchInput.value = searchInput.value.toUpperCase();
      updateTableData();
   });
});

</script>




</body>
</html>

<?php include ('footer.php'); ?>
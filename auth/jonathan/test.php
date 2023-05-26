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

    <script src="test.js"></script>
</head>
<body>
<style>
    * {
        font-family: Arial, sans-serif;
    }

</style>
<div class="content-wrapper" style="min-height: 820px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="m-1 text-dark">Masterlist <a style="font-size:16px">Dispay and print reports of members information</a></h3>
                        
                            
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Reports</a></li>
                            <li class="breadcrumb-item">Masterlist</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content -->
        <div class="content">
            <div class="col-md-5">
                <div class="card card" >
                    <div class="card-header" style="background-color:maroon; height:50px"></div>
                    <div class="card-body">
                    <form id="myForm" method="post" action="generate_pdf.php">
                    <label for="startdate">Start Date:</label>
                    <div class="input-group mb-3">
                        <input type="date" id="startdate" class="form-control" name="startdate" required>
                    </div>
                    <label for="enddate">End Date:</label>
                    <div class="input-group mb-3">
                        <input type="date" id="enddate" class="form-control" name="enddate" required>
                    </div>
                    <label for="form-group">Barangay</label>
                    <div class="col-mb-3">
                            <div class="form-group">
                            <select name="address" class="select2 select2-hidden-accessible" style="width: 100%; height: 36px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option selected="" data-select2-id="0"></option>
                                <option data-select2-id="1">Aplaya</option>
                                <option data-select2-id="2">Balibago</option>
                                <option data-select2-id="3">Caingin</option>
                                <option data-select2-id="4">Dila</option>
                                <option data-select2-id="5">Dita</option>
                                <option data-select2-id="6">Don Jose</option>
                                <option data-select2-id="7">Ibaba</option>
                                <option data-select2-id="8">Kanluran </option>
                                <option data-select2-id="9">Labas</option>
                                <option data-select2-id="10">Macabling</option>
                                <option data-select2-id="11">Malitlit</option>
                                <option data-select2-id="12">Malusak </option>
                                <option data-select2-id="13">Market Area</option>
                                <option data-select2-id="14">Pooc </option>
                                <option data-select2-id="15">Pulong Santa Cruz</option>
                                <option data-select2-id="16">Santo Domingo</option>
                                <option data-select2-id="17">Sinalhan</option>
                                <option data-select2-id="18">Tagapo</option>
                            </select>
                            </div>
                        </div>
                        <label for="form-group">Original Masterlist Prepared By:</label>
                        <div class="input-group mb-3">
                            <input id="preparedby" class="form-control" name="preparedby" placeholder="The User" required>
                        </div>
                        <label for="form-group">Organized By:</label>
                        <div class="input-group mb-3">
                            <input id="organizedby" class="form-control" name="organizedby" placeholder="The User" required>
                        </div>
                    <!-- /.col -->
                    <div class="col-13">
                        <button type="submit" class="btn btn-warning btn-block" value="Print">Print</button>
                    </div>
                    <!-- /.col -->  
                </form>
                    </div></div></div></div>
</div>
</body>

<?php include ('footer.php');?>    
</html>
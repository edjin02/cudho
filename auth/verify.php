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
</style>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 820px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h6 class="m-1 text-dark">Search Record</h6>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <!-- <li class="breadcrumb-item active">Homepage</li> -->
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
    
                        <div class="form-group">
                        <div class="input-group mb-5">
                        <input type="username" id="username" class="form-control" name="username" placeholder="username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    </div>
                        </div>
                        
                        <div class="col-sm-2">
                            <div class="form-group">
                            <select class="select2 select2-hidden-accessible" style="width: 100%; height: 36px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option selected="" data-select2-id="5">ASC</option>
                                <option data-select2-id="14">DESC</option>
                            </select>
                            </div>
                        </div>

                        
                        
                        <div class="col-13 col-sm-1">
                            <button type="submit" class="btn btn-primary btn-block" value="add" >Add</button>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>


        

</body>
</html>

<?php include ('footer.php'); ?>
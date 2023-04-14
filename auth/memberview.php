<?php include ('nav-bar.php');  ?>
<?php
$tag = $_GET['tag'];
$head = $_GET['head'];
$samahan = $_GET['samahan'];
$barangay = $_GET['barangay'];
$income = $_GET['income'];
?>

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
        padding: 5px;
    }
    .chead-text
    {
        font-size: 20px;
        font-weight: 300;
        margin-bottom: 0;
        margin-top: 5px;
    }
    .chead-color .add
    {
        color:white;
        text-align: right;
    }
</style>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 820px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h3 class="m-1 text-dark">Member View <a style="font-size:16px">View, Add, Edit and/or Print Member's Registration</a></h3>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Records</a></li>
                            <li class="breadcrumb-item"><a href="#">Verification</a></li>
                            <li class="breadcrumb-item">Member View</li>
                           
                        </ol>   
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->

    <!-- box container -->
    <section class="content">
        <div class="col-md-20">
            <div class="card card-widget widget-user">
            <div class="chead-color">
                    <h3 class="chead-text">
                        Member Information 
                    </h3>
                </div>
            <div class="card-footer">
                
            </div>
            </div>
                    <!-- /.widget-user -->
        </div>

        <!-- next t -->
        <div class="row">

            <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    
                    <div class="chead-color">
                        <div class="row">
                            <h3 class="chead-text" style="margin:10px;">Other Info</h3>
                            <div class="add col-13">
                        <button type="submit" class="btn btn-primary" value="Add" style="">Add</button>
                    </div>
                        </div>
                    </div>
                    <div class="card-footer">
                
                    </div>
                </div>
                    <!-- /.widget-user -->
            </div>

            <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="chead-color">
                        <h3 class="chead-text">Family Info</h3>
                    </div>
                    <div class="card-footer">
                    </div>
                    <!-- /.widget-user -->
                </div>
            </div>

            <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="chead-color">
                        <h3 class="chead-text">Family Info</h3>
                    </div>
                    <div class="card-footer">
                    </div>
                    <!-- /.widget-user -->
                </div>
            </div>
            <table>
                <tr>
                    <td>Tag:</td>
                    <td><?php echo $tag; ?></td>
                </tr>
                <tr>
                    <td>Household Head:</td>
                    <td><?php echo $head; ?></td>
                </tr>
                <tr>
                    <td>Samahan:</td>
                    <td><?php echo $samahan; ?></td>
                </tr>
                <tr>
                    <td>Barangay:</td>
                    <td><?php echo $barangay; ?></td>
                </tr>
                <tr>
                    <td>Monthly Income:</td>
                    <td><?php echo $income; ?></td>
                </tr>
                </table>
            
        </div>
    </section>
    
    </div>
</div>
        

</body>
</html>

<?php include ('footer.php'); ?>
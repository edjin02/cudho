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
                            <select class="select2 select2-hidden-accessible" style="width: 100%; height: 36px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
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

                        <div class="col-13">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Launch Large Modal</button>
                        <!-- <button type="add" class="btn btn-primary btn-default" style="width: 200px; height: 36px"  value="add" >Add</button> -->
                        <!-- modals -->
                        <!-- <div class="modal fade show" id="modal-lg" style="display: block; padding-right: 17px;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Large Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>One fine body…</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>

                        </div>

                        </div>     -->
                    </div>
                        </div>
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
                            <tbody>
                            <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>NEWHORIZONVILLE NEIGHBORHOOD ASSOC INC.-ROADSIDE</td>
                            <td>Pulong Santa Cruz </td>
                            <td>4000</td>
                            </tr>
                            <tr>
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td>NEWHORIZONVILLE NEIGHBORHOOD ASSOC INC.-ROADSIDE</td>
                            <td>Pulong Santa Cruz </td>
                            <td>4000</td>
                            </tr>
                            <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>NEWHORIZONVILLE NEIGHBORHOOD ASSOC INC.-ROADSIDE</td>
                            <td>Pulong Santa Cruz </td>
                            <td>4000</td>
                            </tr>
                            <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>NEWHORIZONVILLE NEIGHBORHOOD ASSOC INC.-ROADSIDE</td>
                            <td>Pulong Santa Cruz </td>
                            <td>4000</td>
                            </tr>
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


<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- SweetAlert2 -->
<!-- <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script> -->
<!-- Toastr -->
<!-- <script src="../../plugins/toastr/toastr.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<!-- <script> -->
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>
        

</body>
</html>

<?php include ('footer.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Product Add</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <script src="https://cdn.ckeditor.com/4.16.2/basic/ckeditor.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                </phpul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url(); ?>" class="brand-link">
                <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['name']; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('datatable'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    User data table 
                                
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Add Product
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Addtype" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Add Product Type</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="Addproduct" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Add Product Subtype</p>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>addProduct" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Add Product</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>productGallery" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Product Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Email" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    MailBox
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Product Add</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Add Product</li>

                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div>
                    <?php
                    if (!empty($this->session->flashdata('error'))) {
                        echo ("<div class='alert alert-danger'>" . $this->session->flashdata('error') . "</div>");
                    }
                    ?>
                    <?php
                    if (!empty($this->session->flashdata('success'))) {
                        echo ("<div class='alert alert-success'>" . $this->session->flashdata('success') . "</div>");
                    }
                    ?>
                </div><?php
                $id = $this->input->get('product_id');?>
                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url("updateprouctsss?product_id=$id");?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update Product Details</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Product Name</label>
                                        <input  value="<?php echo $products->product_name;  ?>"  type="text" id="product_name" class="form-control" name="product_name" required>
                                    </div>


                                    <br />

                               

                                    <div class="form-group">
                                        <label for="inputDescription">Product Description</label>
                                        <textarea id="editor" name="product_desc" required><?php if (isset($products->product_desc)) {
                                                                                                echo $products->product_desc;
                                                                                            } ?>
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace('product_desc'); // ID of element
                                        </script>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputProjectLeader">Cost</label>
                                        <input type="number" id="inputCost" class="form-control" name="product_cost" pattern="(^\d*\.?\d*[1-9]+\d*$)|(^[1-9]+\d*\.\d*$)" <?php if (isset($products->product_cost)) { ?> value="<?php echo $products->product_cost;  ?>" <?php } ?> min=1 oninvalid="setCustomValidation('Cost cannot be negetive')" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            
                        </div>
                   
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <input type="submit" name="submit" value="Update Product" class="btn btn-success float-right">
                        </div>
                    </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script>
        function PreviewImage(e) {
            if (e.files.length > 3) {
                alert("Only 3 files accepted.");
                e.preventDefault();
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadFile").files[0]);
            var div = document.getElementById("x");
            div.innerHTML += "<img id='uploadPreview' style='width:auto;height: 100px;'/>";
            oFReader.onload = function(oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };

        function preview_image() {
            var total_file = document.getElementById("uploadFile").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#x').append("<img  style='width:auto;height: 100px;' src='" + URL.createObjectURL(event.target.files[
                    i]) + "'>");
            }
        };
    </script>
   
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#type_id').change(function() {
                // var id = document.getElementById('#type');
                // alert(id);
                var id = $('#type_id').val();
                if (id != '') {
                    $.ajax({
                        method: "POST",
                        url: '<?php echo base_url('fetchsub') ?>',
                        data: {
                            id: id
                        },
                        success: function(res) {
                            let html = `<option value= "">select sub type</option>`;
                            $.each(res, function(index, value) {
                                html += `<option value="${value.Id}">${value.sub_name}</option>`;
                            });
                            // console.log(html, 'htmlhtmlhtmlhtmlhtml')
                            $('#sub_id').html(html);
                        }
                    });
                } else {
                    $('#sub_id').html('<option value="">select type first</option>');
                }
            })
        });
    </script>
</body>

</html>
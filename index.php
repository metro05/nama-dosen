<?php
session_start();
if(!isset($_SESSION['login'])){
header('location:login.php');
}
include 'koneksi.php';
?>  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="resources/css/simple-sidebar.css" rel="stylesheet">

    <link rel="stylesheet" href="resources/css/tpembelian.css">

    <!-- css untuk select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php?page=home"><span class="text-primary">Sistem Informasi Data 
                    </a> 
                </li>
                <li>
                    <a href="index.php?page=Mahasiswa">Data Mahasiswa</a>
                </li>
                <li>
                    <a href="index.php?page=dosen">Data Dosen</a>
                </li>
                <li>
                    <a href="index.php?page=matakuliah">Data Matakuliah</a>
                </li>
                <li>
                    <a href="index.php?page=jurusan">Data Jurusan</a>
                </li>
                <li>
                    <a href="logout.php"><span class="text-danger">logout</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper" class="w-75">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- halaman -->
                        <section class="item content">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    if (isset($_GET['page'])) {
                                        $halaman = $_GET['page'];
                                    } else {
                                        $halaman = "";
                                    }

                                    if ($halaman == "") {
                                        include "page/home.php";
                                        //include "page/tambah.php";
                                        // include "page/buku.php";
                                        // include "page/kontak.php";
                                    } else if (!file_exists("page/$halaman.php")) {
                                        echo "halaman yang dicari tidak ditemukan";
                                    } else {
                                        include "page/$halaman.php";
                                    }
                                    
                                    ?>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- wajib jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#select-option").select2({
                theme: 'bootstrap4',
                placeholder: "Please Select"
            });
        });
    </script>

    <script src="resources/js/script.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>
</body>

</html>
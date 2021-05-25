<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- my css -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/datepicker3.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/w3.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/bootstrap-icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/DataTables/datatables.min.css') ?>" rel="stylesheet" type="text/css">

    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> -->
    <script src="<?php echo base_url('assets/DataTables/datatables.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>


    <!-- <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script> -->

    <script>
        function side_open() {
            document.getElementById("main").style.marginLeft = "230px";
            document.getElementById("mySidebar").style.width = "200px";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("closeNav").style.display = "inline-block";
            document.getElementById("openNav").style.display = 'none';
            document.getElementById("laundry").style.display = 'none';
        }

        function side_close() {
            document.getElementById("main").style.marginLeft = "10%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
            document.getElementById("closeNav").style.display = "none";
            document.getElementById("laundry").style.display = 'inline-block';
        }
    </script>

</body>

</html>
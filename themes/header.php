<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecommerce</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="themes/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="themes/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="themes/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="themes/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="themes/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="themes/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="themes/images/favicon.png" />
</head>

<body>
    <?php if (isset($_SESSION["user"])): ?>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php require_once("themes/navbar.php"); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php require_once("themes/sidebar.php"); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php endif; ?>
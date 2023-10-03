<?php session_start(); ?>
<?php require_once "model/function.php"; 

$Fcall = new mainClass();

if (!isset($_SESSION['Admin'])) {
  echo '<script>window.location="login.php"</script>';
}

?>
<!doctype html>
<html lang="en">
<?php 
     require_once "view/includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="sweetalert.css">
<script src="sweetalert.min.js"></script>

        <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
        
        <?php require_once "view/includes/navbar.php"; ?>   
        
        <!-- ========== Left Sidebar Start ========== -->

        <?php require_once "view/includes/sidebar.php"; ?>
       
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                  <?php require_once "control/controller.php"; ?>
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php require_once "view/includes/footer.php"; ?>     
        </div>
        <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
     
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <?php require_once "view/includes/foot_link.php"; ?>     

    </body>

</html>
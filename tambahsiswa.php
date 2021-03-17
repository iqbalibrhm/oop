<!DOCTYPE html>
<html lang="en">

<?php
require('head.php');
?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php
    include("sidebar.php");
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <?php
        include("navbar.php");
        ?>



      <div class="container-fluid">
          <h1 class="mt-4 text-center">Halaman Untuk Tambah Siswa</h1>


            <form action="index.php">
                <label for="">Nama </label>
                <input type="text" class="formcontrol" name="" value="">

                <label for="">NIM </label>
                <input type="text" class="formcontrol" name="" value="">
                
                <button class="btn btn-primary">SUBMIT</button>
            </form>

        </div>
    </div>
    <!-- /#page-content-wrapper -->
    
  </div>

  <!-- /#wrapper -->

  <?php
  include('script.php');
  ?>


</body>

</html>

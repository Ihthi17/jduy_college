<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>
<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">
<div class="card">
  <div class="card-header">
                       Transfer In List
                    </div>
  <div class="card-body">
    <div class="col-md-12 text-left">
                    <button type="button" class="btn btn-primary mr-2" onclick="window.location.href='add_transfer_in.php'"><i class="fa-solid fa-right-left"></i> Transfer</button>
                    <button type="button" class="btn btn-info"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                </div>
                <br>
                  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Student ID</th>
          <th scope="col">Transfer ID</th>
          <th scope="col">Univercity Name</th>
          <th scope="col">Date</th>
          <th scope="col">Note</th>
          <th scope="col">Action</th>
          
          </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

          </tbody>
    </table>
                  </div>
  </div>
  </div>

   </div>
</div>
<?php include 'includes/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'includes/script.php' ?>
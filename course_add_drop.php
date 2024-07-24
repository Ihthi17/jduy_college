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
                       Course Add Drop
                    </div>
  <div class="card-body">
    
                <div class="col-md-6">
                    <form action="">
                <label for="program">Student ID</label>
                 <select name="" id="branch" class="form-control">
                            <option value="all">All</option>
                             
                 </select>
                 <br>
            <button type="submit" class="btn btn-info"><i class="fas fa-search"></i> Search</button>
            </form>
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
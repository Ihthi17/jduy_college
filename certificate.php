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
  Certificate
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-3 col-6">
                <label for="program">Batch</label>
                 <select id="batch" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
        </div>
            <div class="col-md-3 col-6">
                <label for="program">Program</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
            <div class="col-md-3 col-6">
                <label for="status">Student ID</label>
                <input type="text" name="student_id" id="student_id" class="form-control">
            </div>
            <div class="col-md-3 col-6">
                <label for="status">Certificate</label>
                 <select id="certificate" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
             
    </div>
    <br>
              <div class=" d-flex align-items-end ml-3">
            <button class="btn btn-info"><i class="fas fa-search"></i> Search</button>
            </div>
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
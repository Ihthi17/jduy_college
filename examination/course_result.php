<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
?>

<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">

<div class="card">
  <div class="card-header">
   Course Result
  </div>
  <div class="card-body">
   
             
    <div class="row">
            <div class="col-md-3 col-3">
                <label for="faculty">Faculty</label>
                 <select id="faculty" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="program">Program</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
           <div class="col-md-3 col-3">
                <label for="session">Session </label>
                 <select id="session" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="semester">Semester</label>
                 <select id="semester" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
                </div>
                <br>
                <div class="row">
            <div class="col-md-3 col-3">
                <label for="section">Section</label>
                 <select id="section" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="course">Course</label>
                 <select id="course" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
           
            
           
              <div class="col-md-3 col-3 d-flex align-items-end">
            <button class="btn btn-info"><i class="fas fa-search"></i> Search</button>
            </div>
        </div>
  </div>

 
</div>
<br>


   </div>
</div>
<?php include '../includes/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include '../includes/script.php' ?>

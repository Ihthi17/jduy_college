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
  Student Progress Report
  </div>
  <div class="card-body">
   
    <div class="row">
            <div class="col-md-3 col-3">
                <label for="program">Faculty</label>
                 <select id="faculty" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="status">Program</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
           <div class="col-md-3 col-3">
                <label for="status">Session</label>
                 <select id="session" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="semester">Semester</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
                </div>
                <br>
                <div class="row">
            <div class="col-md-3 col-3">
                <label for="section">Section</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
             <div class="col-md-3 col-3">
                <label for="status">Status</label>
                 <select id="program" class="form-control">
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
<div class="card">
  
  <div class="card-body">
      <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Student ID</th>
          <th scope="col">Name</th>
          <th scope="col">Program</th>
          <th scope="col">Session</th>
          <th scope="col">Semester</th>
          <th scope="col">Sesction</th>
          <th scope="col">Total Credits</th>
          <th scope="col">Cumulative GPA</th>
           <th scope="col">Batch</th>
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
              <td></td>
              <td></td>

          </tbody>
    </table>
      </div>
  </div>
  </div>

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
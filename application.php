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
    Application List
  </div>
  <div class="card-body">
    <div class="row">
            <div class="col-md-2 col-6">
                <label for="program">Program</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                  <option value="Pending">Software Engineering</option>
                  <option value="Approved">Social Science</option>
                  <option value="Rejected">Engineering</option>
                  </select>
            </div>
            <div class="col-md-2 col-6">
                <label for="status">Status</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                  <option value="Pending">Pending</option>
                  <option value="Approved">Approved</option>
                  <option value="Rejected">Rejected</option>
                  </select>
            </div>
            <div class="col-md-2 col-6">
                <label for="from-date">From Date</label>
                <input type="date" id="from-date" class="form-control" value="2023-07-23">
            </div>
            <div class="col-md-2 col-6">
                <label for="to-date">To Date</label>
                <input type="date" id="to-date" class="form-control" value="2024-07-23">
            </div>
            <div class="col-md-2 col-6">
                <label for="registration-no">Registration No</label>
                <input type="text" id="registration-no" class="form-control">
            </div>
              <div class="col-md-2 col-6 d-flex align-items-end">
            <button class="btn btn-info"><i class="fas fa-search"></i> Search</button>
            </div>
        </div>
  </div>

 
</div>
 <br>
<div class="card">
  
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Registration No</th>
          <th scope="col">Name</th>
          <th scope="col">Gender</th>
          <th scope="col">Program</th>
          <th scope="col">Apply Date</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>00002521</td>
              <td>John Doe</td>
              <td>Male</td>
              <td>Computer Science</td>
              <td>2023-07-23</td>
              <td>Pending</td>

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
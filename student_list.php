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
    Student List
  </div>
  <div class="card-body">
   <div class="col-md-12 text-left">
                    <button type="button" class="btn btn-primary mr-2" onclick="window.location.href='add_student.php'"><i class="fa-solid fa-plus"></i> Add New</button>
                    <button type="button" class="btn btn-info"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                    <button type="button" class="btn btn-dark"><i class="fa-solid fa-upload"></i> Import</button>
                </div>
                <br>
    <div class="row">
            <div class="col-md-3 col-3">
                <label for="program">Branch</label>
                 <select id="faculty" class="form-control">
                  <option value="All">All</option>
                  <option value="Colombo">Colombo</option>
                  <option value="Galle">Galle</option>
                  <option value="Jaffna">Jaffna</option>
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="status">Course</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                  <option value="IT">IT</option>
                  <option value="Maths">Maths</option>
                  <option value="Physics">Physics</option>
                  </select>
            </div>
           <div class="col-md-3 col-3">
                <label for="status">Session</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="status">Semester</label>
                 <select id="program" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
                </div>
                <br>
                <div class="row">
            <div class="col-md-3 col-3">
                <label for="status">Section</label>
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
            <div class="col-md-3 col-3">
                <label for="registration-no">Student Admission No</label>
                <input type="text" id="addmission-no" class="form-control">
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
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Student Admission No</th>
          <th scope="col">Name</th>
          <th scope="col">Program</th>
          <th scope="col">Session</th>
          <th scope="col">Semester</th>
          <th scope="col">Sesction</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>00002521</td>
              <td>John Doe</td>
              <td>IT</td>
              <td>2nd</td>
              <td></td>
              <td></td>
              <td>Pending</td>

          </tbody>
    </table>
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

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
   Fees Master List
  </div>
  <div class="card-body">
    <div class="col-md-12 text-left">
                    <button type="button" class="btn btn-primary mr-2" ><i class="fa-solid fa-plus"></i> Add New</button>
                    <button type="button" class="btn btn-info"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                    
                </div>
                <br>
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
                  <option value="IT">IT</option>
                  <option value="Maths">Maths</option>
                  <option value="Physics">Physics</option>
                  </select>
            </div>
           <div class="col-md-3 col-3">
                <label for="status">Session</label>
                 <select id="session" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="status">Semester</label>
                 <select id="semester" class="form-control">
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
                <label for="status">Fees Type</label>
                 <select id="ftype" class="form-control">
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
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Fees Type</th>
          <th scope="col">Amount</th>
          <th scope="col">Assign Date</th>
          <th scope="col">Due Date</th>
          <th scope="col">Student </th>
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
              

          </tbody>
    </table>
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
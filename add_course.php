<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>
<style>
    .btn-icegreen {
    background-color: #7FE5A8; 
    border-color: #7FE5A8; 
    color: #fff; 
}
.btn-icegreen:hover {
    background-color: #6AD396; 
    border-color: #ffff;
    color: #fff; 
}
</style>



<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
         <div class="form-group">
                <label for="roomNo">Title *</label>
                <input type="text" class="form-control" id="title" placeholder="Enter room number" required>
            </div>
            <div class="form-group">
                <label for="buildingFloor">Code</label>
                <input type="text" class="form-control" id="code" placeholder="Enter building and floor">
            </div>
            <div class="form-group">
                <label for="capacity">Hours</label>
                <input type="number" class="form-control" id="hours" placeholder="Enter capacity">
            </div>
            <div class="form-group">
                <label for="type">Course Type</label>
                <input type="text" class="form-control" id="cotype" placeholder="Enter type">
            </div>
            <div class="form-group">
                <label for="type">Class Type</label>
                <input type="text" class="form-control" id="cltype" placeholder="Enter type">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-icegreen"><i class="fa fa-check"></i> Save </button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header">
  Course List
  </div>
  <div class="card-body">
   <div class="col-md-12 text-left">
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal" ><i class="fa-solid fa-plus"></i> Add New</button>
                    <button type="button" class="btn btn-info mr-2"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                    <button type="button" class="btn btn-dark mr-2"><i class="fa-solid fa-upload"></i> Import</button>

                    
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
                 
                  </select>
            </div>
           <div class="col-md-3 col-3">
                <label for="status">course Type</label>
                 <select id="ctype" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="status">Class Type</label>
                 <select id="cltype" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
                </div>
                <br>
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
          <th scope="col">Title</th>
          <th scope="col">Code</th>
          <th scope="col">C.H.</th>
          <th scope="col">Course Type</th>
          <th scope="col">Class Type</th>
          <th scope="col">Program</th>
          <th scope="col">Status</th>
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
              <td></td>
              <td></td>
            </tr>

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
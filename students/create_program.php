<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
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
<div class="row">
    <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Create Faculty
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Branch *</label>
                                <select name="" id="branch" class="form-control">
                                <option value="all">All</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Branch Name *</label>
                                <input type="text" class="form-control" id="bname" required>

                            </div>
                           
                            <div class="form-group">
                                <label for="title">Branch No *</label>
                               <input type="text" class="form-control" id="bno" required>
                            </div>
                           
                            <button type="submit" class=" btn btn-icegreen"><i class="fas fa-check"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>

<br>
<div class="col-md-8">
<div class="card">
  
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
           <th scope="col">Branch</th>
          <th scope="col">Branch Name</th>
          <th scope="col">Branch No</th>
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
            </tr>

          </tbody>
    </table>
  </div>
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
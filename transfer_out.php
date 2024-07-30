<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>
<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item Store</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="#">
   
            <div class="form-group">
                <label for="faculty">Student ID *</label>
                 <select name="student_id" id="student_id" class="form-control">
                  <option value="all">All</option>
                 </select>
            </div>
       
            
    
    
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-icegreen"><i class="fa fa-search"></i> Search </button>
   
</form>
    </div>
  </div>
</div>
   </div>
</div>
<!--card start-->
<div class="card">
  <div class="card-header">
                       Transfer Out List
                    </div>
  <div class="card-body">
    <div class="col-md-12 text-left">
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-right-left"></i> Transfer</button>
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
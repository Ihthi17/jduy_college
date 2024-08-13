<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
?>

<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">
<div class="row">
    <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Create Content Type
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title *</label>
                                <input type="text" class="form-control" id="title" required>
                            </div>
                            <button type="submit" class="btn btn-icegreen"> <i class="fa fa-check"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>

<br>
<div class="col-md-8">
<div class="card">
  <div class="card-header">
                         Content Type List
                    </div>
  <div class="card-body">
      <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
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
            </tr>

          </tbody>
    </table>
      </div>
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
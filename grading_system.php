<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>

<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">
<div class="row">
    <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Create Grading System
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Grade *</label>
                                <input type="text" class="form-control" id="grade" required>

                            </div>
                            <div class="form-group">
                                <label for="title">Point *</label>
                                <input type="text" class="form-control" id="point" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Min Mark (%) *</label>
                                <input type="text" class="form-control" id="minmark" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Max Mark (%) </label>
                               <input type="text" class="form-control" id="maxmark" required>
                            </div>
                            <button type="submit" class="btn btn-icegreen"><i class="fas fa-check"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>

<br>
<div class="col-md-8">
<div class="card">
  <div class="card-header">
                        Grading System List
                    </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Grade</th>
          <th scope="col">Point</th>
          <th scope="col">Min Mark (%)</th>
          <th scope="col">Max Mark (%)</th>
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
            </tr>

          </tbody>
    </table>
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
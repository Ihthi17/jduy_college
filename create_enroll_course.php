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
<div class="row">
    <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Create Status Type
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Branch *</label>
                               <select name="faculty" id="faculty" class="form-control">
                                <option value="All">All</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Course *</label>
                               <select name="course" id="course" class="form-control">
                                <option value="All">All</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Semester *</label>
                               <select name="semester" id="semester" class="form-control">
                                <option value="All">All</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Section *</label>
                               <select name="section" id="section" class="form-control">
                                <option value="All">All</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Subject (Multiple) *</label>
                              <input type="text" name="subject" id="subject" class="form-control">
                            </div>
                            
                            <button type="submit" class="btn btn-icegreen"><i class="fa fa-check"></i> Save </button>
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
          <th scope="col">Course</th>
          <th scope="col">Semester</th>
          <th scope="col">Section</th>
          <th scope="col">Course</th>
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
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

<div class="card">
  <div class="card-header">
    Attendance Report
  </div>
  <div class="card-body">
   <form action="">
    <div class="row">
             <div class="col-md-6">
                <label for="program">Branch</label>
                 <select name="" id="branch" class="form-control">
                            <option value="all">All</option>
                             
                 </select>
            </div>
            
   
            <div class="col-md-6">
               <label for="program">Course</label>
                 <select name="" id="course" class="form-control">
                            <option value="all">All</option>
                             
                 </select>
            </div>
             </div>
             <br>
             <div class="row">
            <div class="col-md-6">
                <label for="program">Model</label>
                 <input type="text" id="model" class="form-control" >
            </div>
            <div class="col-md-6">
                <label for="program">Subject</label>
                 <select name="" id="subject" class="form-control">
                            <option value="all">All</option>
                             
                 </select>
            </div>
             </div>
              <br>
              <div class="col-md-2 col-6 d-flex align-items-end">
               
            <button type="submit" class="btn btn-icegreen"><i class="fa-solid fa-check"></i> Update</button>
            </form>
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
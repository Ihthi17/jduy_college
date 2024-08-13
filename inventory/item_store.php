<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
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
                <label for="faculty">Store *</label>
                 <input type="text" name="store" id="store" class="form-control">
            </div>
       
            <div class="form-group">
                <label for="faculty">Store No *</label>
               <input type="text" name="store-no" id="store-no" class="form-control">

            </div>
             <div class="form-group">
                <label for="faculty">Phone *</label>
                 <input type="tel" name="phone" id="phone" class="form-control">

            </div>
             <div class="form-group">
                <label for="faculty">Email *</label>
                 <input type="mail" name="email" id="email" class="form-control">

            </div>
             <div class="form-group">
                <label for="faculty">Address *</label>
                 <input type="text" name="address" id="address" class="form-control">

            </div>
       
    
    
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-icegreen"><i class="fa fa-check"></i> Save </button>
   
</form>
    </div>
  </div>
</div>
   </div>
</div>
<div class="card">
  <div class="card-header">
   Item Stock List
  </div>
  <div class="card-body">
   <div class="col-md-12 text-left">
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-plus"></i> Add New</button>
                    <button type="button" class="btn btn-info"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                    
                </div>
                <br>
    
  </div>

 

<br>
<div class="card">
  
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Store</th>
          <th scope="col">Store No</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Status </th>
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
              
              
              
              

          </tbody>
    </table>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bodyText').summernote({
                height: 200
            });
        });
    </script>
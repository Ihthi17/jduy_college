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
        <h5 class="modal-title" id="exampleModalLabel">Add Item Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="#">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="faculty">Item *</label>
                <select name="item" id="item" class="form-control">
                    <option value="all">All</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="faculty">Supplier *</label>
                <select name="supplier" id="supplier" class="form-control">
                    <option value="all">All</option>
                </select>
            </div>
        </div>
   
        <div class="col-md-4">
            <div class="form-group">
                <label for="program">Store</label>
                <select name="store" id="store" class="form-control">
                    <option value="all">All</option>
                </select>
            </div>
        </div>
    </div>
      <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="session">Quantity</label>
                <input type="number" name="qty" id="qty" class="form-control">
            </div>
        </div>
  
    
        <div class="col-md-4">
            <div class="form-group">
                <label for="semester">Price</label>
              <input type="text" name="price" id="price" class="form-control">

            </div>
        </div>
    
    
        <div class="col-md-4">
            <div class="form-group">
                <label for="section"> Date</label>
               <input type="date" name="date" id="date" class="form-control">
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="course">Attach</label>
                <input type="file" name="attach" id="attach" class="form-control">

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="course">Method</label>
               <select name="method" id="method" class="form-control">
                    <option value="all">All</option>
                </select>

            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
             <label for="course">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
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
    <div class="row">
            <div class="col-md-3 col-3">
                <label for="program">Item</label>
                 <select id="item" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="program">Supplier</label>
                 <select id="supplier" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
             <div class="col-md-3 col-3">
                <label for="program">Store</label>
                 <select id="store" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
            <div class="col-md-3 col-3">
                <label for="status">From Date</label>
                 <input type="date" name="fdate" id="fdate" class="form-control">
            </div>
           <div class="col-md-3 col-3">
                <label for="status">To Date</label>
                <input type="date" name="todate" id="todate" class="form-control">
            </div>
            
                </div>
            </div>
               
              <div class="col-md-3 col-3 d-flex align-items-end">
            <button class="btn btn-info ml-3"><i class="fas fa-search"></i> Search</button>
            
        </div>
  </div>

 

<br>
<div class="card">
  
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Item</th>
          <th scope="col">Supplier</th>
          <th scope="col">Store</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Date</th>
          <th scope="col">Method</th>
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
              <td></td>
              <td></td>
              
              
              

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bodyText').summernote({
                height: 200
            });
        });
    </script>
<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>
<style>
.custom-radio {
    position: relative;
    appearance: none;
    width: 20px;
    height: 20px;
    border: 2px solid #ccc; 
    border-radius: 50%;
    outline: none;
    cursor: pointer;
    margin-right: 5px;
    transition: background-color 0.2s, border-color 0.2s;
}

.custom-radio:checked {
    background-color: #bdf8b7;
    border-color: #bdf8b7; 
}

</style>
<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">

<div class="card">
  <div class="card-header">
    Quick Received
  </div>
  <div class="card-body">
   
    <div class="row">
            <div class="col-md-6 col-6">
                <label for="program">Student ID</label>
                 <select id="sid" class="form-control">
                  <option value="All">All</option>
                 
                  </select>
            </div>
            <div class="col-md-6 col-6">
                <label for="status">Fees Type</label>
                 <select id="ftype" class="form-control">
                  <option value="All">All</option>
                  
                  </select>
            </div>
    </div>
    <div class="row">
           <div class="col-md-6 col-6">
                <label for="status">Due Date</label>
                 <input type="date" name="ddate" id="ddate" class="form-control">
                 
                  </select>
            </div>
     

            <div class="col-md-6 col-6">
                <label for="status">Pay Date</label>
             <input type="date" name="pddte" id="pdate" class="form-control">

            </div>
                </div>
                <br>
                <div class="row">
            <div class="col-md-4 col-4">
                <label for="status">Fee ($) </label>
                <input type="text" id="fee" class="form-control">
            </div>
             <div class="col-md-4 col-4">
                <label for="status">Discout (%) </label>
                <input type="text" id="discount" class="form-control">
            </div>
             <div class="col-md-4 col-4">
                <label for="status">Fine ($) </label>
                <input type="text" id="fine" class="form-control">
            </div>
                </div>
             <div class="row">
           <div class="col-md-6 col-6">
    <label for="registration-no">Net Amount</label>
   <input type="text" id="fine" class="form-control">
      </div>
       <div class="col-md-6 col-6">
    <label for="registration-no">Method</label>
  <select name="method" id="method" class="form-control">
    <option value="all">all</option>
  </select>
      </div>
                </div>
                 <div class="row">
                 <div class="col-md-12 col-12">
    <label for="registration-no">Note</label>
   <textarea name="note" id="note" class="form-control"></textarea>
      </div>
                 </div>   
                <br>
              <div class="col-md-3 col-3 d-flex align-items-end">
            <button class="btn btn-icegreen"><i class="fas fa-check"></i> Save</button>
            </div>
        </div>
  </div>

 
</div>
<br>


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

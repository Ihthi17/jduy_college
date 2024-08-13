<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
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
    Quick Assign
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
                <label for="status">Assign Date</label>
                 <input type="date" name="adate" id="adate" class="form-control">
                 
                  </select>
            </div>
     

            <div class="col-md-6 col-6">
                <label for="status">Due Date</label>
             <input type="date" name="dddte" id="ddate" class="form-control">

            </div>
                </div>
                <br>
                <div class="row">
            <div class="col-md-6 col-6">
                <label for="status">Amount ($) </label>
                <input type="text" id="amonut" class="form-control">
            </div>
            
           <div class="col-md-6 col-6">
    <label for="registration-no">Amount Type</label>
    <br>
      <div class="form-check form-check-inline">
        <input type="radio" id="fixed" name="amount-type" class="form-check-input custom-radio" value="Fixed">
        <label class="form-check-label" for="fixed">Fixed</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" id="per-credit" name="amount-type" class="form-check-input custom-radio" value="Per-Credit">
        <label class="form-check-label" for="per-credit">Per-Credit</label>
    </div>
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
<?php include '../includes/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include '../includes/script.php' ?>

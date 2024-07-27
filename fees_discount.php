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
<div class="row">
    <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                      Create Fees Discount
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title *</label>
                                <input type="text" class="form-control" id="title" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Start Date *</label>
                                <input type="date" class="form-control" id="sdate" required>
                            </div>
                            <div class="form-group">
                                <label for="title">End Date *</label>
                                <input type="date" class="form-control" id="edate" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Amount *</label>
                                <input type="text" class="form-control" id="amount" required>
                            </div>
                             <div class="form-check form-check-inline">
                                <input type="radio" id="fixed" name="amount-type" class="form-check-input custom-radio" value="Fixed">
                                <label class="form-check-label" for="fixed">Fixed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="per-credit" name="amount-type" class="form-check-input custom-radio" value="Per-Credit">
                                <label class="form-check-label" for="percentage">Percentage</label>
                            </div>
                             <div class="form-group">
            <label for="title">Fees Type *</label>
            <select  id="fees_type" class="form-control">
                <option value="all">All</option>
               
                
            </select>
        </div>
                                     <div class="form-group">
                                <label for="title">Student Status *</label>
                                    <select name="s_status" id="s_status" class="selectpicker form-control" >
                                        <option value="all">All</option>
                                       
                                    </select>   
                                    </div>
                            <button type="submit" class="btn btn-icegreen"><i class="fa fa-check"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>

<br>
<div class="col-md-8">
<div class="card">
  <div class="card-header">
    Fees Discount List
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
          <th scope="col">Amount</th>
          <th scope="col">Fees Type</th>
          <th scope="col">Student Status</th>
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
<!-- Mobiscroll JS -->
    
<?php include 'includes/script.php' ?>
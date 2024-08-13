<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
?>
<style>
        .custom-control-label::before {
            left: -2.25rem;
            width: 3rem;
            height: 1rem;
            border-radius: 1rem;
            background-color: #fff;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out;
        }
        .custom-control-label::after {
            top: 0.25rem;
            left: -2rem;
            width: 1rem;
            height: 1rem;
            border-radius: 1rem;
            background-color: white;
            transition: transform .15s ease-in-out;
        }
        .custom-control-input:checked~.custom-control-label::before {
              background-color: #7FE5A8; 
        }
        .custom-control-input:checked~.custom-control-label::after {
            transform: translateX(1rem);
        }
    </style>

<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">

<div class="card">
  <div class="card-header">
  Receipt Setting
  </div>
  <div class="card-body">
 <form>
            <!-- Title -->
             <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" required>
            </div>
                </div>
             </div>
           
            <!-- Body Text -->

             <div class="row">
                <div class="col-md-4">
            <div class="form-group">
                <label for="height">Footer Left Text *</label>
                <textarea name="f_left_text" id="f_left_text" class="form-control"></textarea>
            </div>
                </div>
                 <div class="col-md-4">
            <div class="form-group">
                <label for="height">Footer Center Text *</label>
                <textarea name="f_center_text" id="f_center_text" class="form-control"></textarea>
            </div>
                 </div>
                  <div class="col-md-4">
            <div class="form-group">
                <label for="height">Footer Right Text *</label>
                <textarea name="f_right_text" id="f_right_text" class="form-control"></textarea>
            </div>
                  </div>
            
            
        
            <!-- Logo Left -->
             <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                <label for="logoLeft">Logo Left: <span class="text-primary"> Best Resolution Height- 200 PX, Width- Any PX</span></label>
                <input type="file" class="form-control-file" id="logoLeft">
            </div>
                </div>
                  <div class="col-md-4">
                <div class="form-group">
                <label for="logoLeft">Logo Right: <span class="text-primary"> Best Resolution Height- 200 PX, Width- Any PX</span></label>
                <input type="file" class="form-control-file" id="logoRight">
            </div>
                </div>
                <!-- Width -->
                  <div class="col-md-4">
            <div class="form-group">
                <label for="width">Width *</label>
                <input type="text" class="form-control" id="width" placeholder="1000px" required>
            </div>
             </div>
            
                
             <br>
            
            
            <!-- Submit Button -->
            <button type="submit" class="btn btn-icegreen ml-3"><i class="fa fa-check"></i> Update</button>
             </div>
        </form>
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
 
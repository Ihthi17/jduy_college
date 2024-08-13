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
  Admit Setting
  </div>
  <div class="card-body">
 <form>
            <!-- Title -->
            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" required>
            </div>
            <!-- Body Text -->
             <div class="form-group">
                <label for="bodyText">Body Text</label>
                <textarea id="bodyText" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="height">Footer Left Text *</label>
                <textarea name="f_left_text" id="f_left_text" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="height">Footer Right Text *</label>
                <textarea name="f_left_text" id="f_right_text" class="form-control"></textarea>
            </div>
            <!-- Width -->
            <div class="form-group">
                <label for="width">Width *</label>
                <input type="text" class="form-control" id="width" placeholder="1000px" required>
            </div>
            <!-- Height -->
            <div class="form-group">
                <label for="height">Height *</label>
                <input type="text" class="form-control" id="height" placeholder="auto" required>
            </div>
            <!-- Logo Left -->
             <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                <label for="logoLeft">Logo Left: Best Resolution Height- 200 PX, Width- Any PX</label>
                <input type="file" class="form-control-file" id="logoLeft">
            </div>
                </div>
                  <div class="col-md-4">
               <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" id="customSwitch">
                <label class="custom-control-label" for="customSwitch">Open</label>
            </div>
                </div>
             </div>
                
             
            
            
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
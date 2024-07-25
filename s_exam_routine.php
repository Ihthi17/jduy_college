<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>


<div class="content-wrapper"> 
   <!-- main content start -->
          
   <div class="container-fluid pt-4 px-4">

<div class="card">
  <div class="card-header">
 Exam Routine Setting
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
            <div class="form-group">
                <label for="logoLeft">Logo Left: Best Resolution Height- 200 PX, Width- Any PX</label>
                <input type="file" class="form-control-file" id="logoLeft">
            </div>
            <!-- Logo Right -->
            <div class="form-group">
                <label for="logoRight">Logo Right: Best Resolution Height- 200 PX, Width- Any PX</label>
                <input type="file" class="form-control-file" id="logoRight">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
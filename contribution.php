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
                Contribution
                <p>Total contribution of final result must be equal to 100%</p>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="f_exam">Final Exam (%)</label>
                                <input type="text" id="f_exam" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="m_exam">Midterm Exam (%)</label>
                                <input type="text" id="m_exam" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="t_exam">Test Exam (%)</label>
                                <input type="text" id="t_exam" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="extra_exam">Extra (%)</label>
                                <input type="text" id="extra_exam" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="attendance">Attendance (%)</label>
                                <input type="text" id="attendance" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="assignment">Assignment (%)</label>
                                <input type="text" id="assignment" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="activities">Activities (%)</label>
                                <input type="text" id="activities" class="form-control">
                            </div>
                        </div>
                        </div>
                        <br>
                        
                            <button type="submit" class="btn btn-icegreen"><i class="fas fa-check"></i> Update</button>
                       
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'includes/script.php'; ?>

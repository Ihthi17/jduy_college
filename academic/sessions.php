<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
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
<div class="row">
    <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                       Create Module
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title"> Module Title  *</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Start Date *</label>
                                <input type="date" class="form-control" id="sdate" required>

                            </div>
                           
                            <h4 class="mb-4">Assign Program</h4>
       
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="all">
                <label class="form-check-label" for="all">
                    All
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bachlorOfArt">
                <label class="form-check-label" for="bachlorOfArt">
                    Bachlor of Art
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bsRadiologyTechnology">
                <label class="form-check-label" for="bsRadiologyTechnology">
                    BS Radiology Technology
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bsRadiologyTechnology1">
                <label class="form-check-label" for="bsRadiologyTechnology1">
                    BS Radiology Technology1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="computerEngineering">
                <label class="form-check-label" for="computerEngineering">
                    Computer Engineering
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="englishStudies">
                <label class="form-check-label" for="englishStudies">
                    English Studies
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign">
                <label class="form-check-label" for="fineArtsAndDesign">
                    Fine Arts and Design
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="healthcareAssistant">
                <label class="form-check-label" for="healthcareAssistant">
                    Healthcare Assistant
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="mechanicalEngineering">
                <label class="form-check-label" for="mechanicalEngineering">
                    Mechanical Engineering
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="politicsAndGovernance">
                <label class="form-check-label" for="politicsAndGovernance">
                    Politics and Governance
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="qevsd">
                <label class="form-check-label" for="qevsd">
                    qevsd
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="socialSciences">
                <label class="form-check-label" for="socialSciences">
                    Social Sciences
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="softwareEngineering">
                <label class="form-check-label" for="softwareEngineering">
                    Software Engineering
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="firstGrade">
                <label class="form-check-label" for="firstGrade">
                    الصف الاول
                </label>
            </div>
        
                      <br>     
                            <button type="submit" class=" btn btn-icegreen"><i class="fas fa-check"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>

<br>
<div class="col-md-8">
<div class="card">
  <div class="card-header">
                       Session List
                    </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
           <th scope="col"> Module Title </th>
          <th scope="col">Start Date</th>
          <th scope="col">Program</th>
          <th scope="col">Status</th>
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
            </tr>

          </tbody>
    </table>
  </div>
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
  <script>
        $(document).ready(function() {
            $('#all').click(function() {
                $('input[type="checkbox"]').not(this).prop('checked', this.checked);
            });
        });
    </script>
<?php include '../includes/script.php' ?>
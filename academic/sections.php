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
                      Create Semester
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title  *</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            
                           
                            <h4 class="mb-4">Assign Program</h4>
       
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="all">
                <label class="form-check-label" for="all">
                    All
                </label>
            </div>
            <!-- Bachlor of Art -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bachlorOfArt">
                <label class="form-check-label" for="bachlorOfArt">
                    1. Bachlor of Art
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="bachlorOfArt1stYear">
                        <label class="form-check-label" for="bachlorOfArt1stYear">
                            1st YEAR
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="bachlorOfArt2ndYear">
                        <label class="form-check-label" for="bachlorOfArt2ndYear">
                            2nd Year
                        </label>
                    </div>
                </div>
            </div>
            <!-- BS Radiology Technology -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bsRadiologyTechnology">
                <label class="form-check-label" for="bsRadiologyTechnology">
                    2. BS Radiology Technology
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="radiology1stINU7">
                        <label class="form-check-label" for="radiology1stINU7">
                            Radiology 1st (INU-7)
                        </label>
                    </div>
                </div>
            </div>
            <!-- BS Radiology Technology1 -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bsRadiologyTechnology1">
                <label class="form-check-label" for="bsRadiologyTechnology1">
                    3. BS Radiology Technology1
                </label>
            </div>
            <!-- Computer Engineering -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="computerEngineering">
                <label class="form-check-label" for="computerEngineering">
                    4. Computer Engineering
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering10thSemester">
                        <label class="form-check-label" for="computerEngineering10thSemester">
                            10th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering2ndSemester">
                        <label class="form-check-label" for="computerEngineering2ndSemester">
                            2nd Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering4thSemester">
                        <label class="form-check-label" for="computerEngineering4thSemester">
                            4th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering5thSemester">
                        <label class="form-check-label" for="computerEngineering5thSemester">
                            5th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering6thSemester">
                        <label class="form-check-label" for="computerEngineering6thSemester">
                            6th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering7thSemester">
                        <label class="form-check-label" for="computerEngineering7thSemester">
                            7th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering8thSemester">
                        <label class="form-check-label" for="computerEngineering8thSemester">
                            8th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="computerEngineering9thSemester">
                        <label class="form-check-label" for="computerEngineering9thSemester">
                            9th Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- English Studies -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="englishStudies">
                <label class="form-check-label" for="englishStudies">
                    5. English Studies
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="englishStudies4thSemester">
                        <label class="form-check-label" for="englishStudies4thSemester">
                            4th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="englishStudies5thSemester">
                        <label class="form-check-label" for="englishStudies5thSemester">
                            5th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="englishStudies6thSemester">
                        <label class="form-check-label" for="englishStudies6thSemester">
                            6th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="englishStudies7thSemester">
                        <label class="form-check-label" for="englishStudies7thSemester">
                            7th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="englishStudies8thSemester">
                        <label class="form-check-label" for="englishStudies8thSemester">
                            8th Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- Fine Arts and Design -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign">
                <label class="form-check-label" for="fineArtsAndDesign">
                    6. Fine Arts and Design
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign10thSemester">
                        <label class="form-check-label" for="fineArtsAndDesign10thSemester">
                            10th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign4thSemester">
                        <label class="form-check-label" for="fineArtsAndDesign4thSemester">
                            4th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign5thSemester">
                        <label class="form-check-label" for="fineArtsAndDesign5thSemester">
                            5th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign6thSemester">
                        <label class="form-check-label" for="fineArtsAndDesign6thSemester">
                            6th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign7thSemester">
                        <label class="form-check-label" for="fineArtsAndDesign7thSemester">
                            7th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign8thSemester">
                        <label class="form-check-label" for="fineArtsAndDesign8thSemester">
                            8th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fineArtsAndDesign9thSemester">
                        <label class="form-check-label" for="fineArtsAndDesign9thSemester">
                            9th Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- Healthcare Assistant -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="healthcareAssistant">
                <label class="form-check-label" for="healthcareAssistant">
                    7. Healthcare Assistant
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="healthcareAssistant4thSemester">
                        <label class="form-check-label" for="healthcareAssistant4thSemester">
                            4th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="healthcareAssistant5thSemester">
                        <label class="form-check-label" for="healthcareAssistant5thSemester">
                            5th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="healthcareAssistant6thSemester">
                        <label class="form-check-label" for="healthcareAssistant6thSemester">
                            6th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="healthcareAssistant7thSemester">
                        <label class="form-check-label" for="healthcareAssistant7thSemester">
                            7th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="healthcareAssistant8thSemester">
                        <label class="form-check-label" for="healthcareAssistant8thSemester">
                            8th Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- Mechanical Engineering -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="mechanicalEngineering">
                <label class="form-check-label" for="mechanicalEngineering">
                    8. Mechanical Engineering
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mechanicalEngineering4thSemester">
                        <label class="form-check-label" for="mechanicalEngineering4thSemester">
                            4th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mechanicalEngineering5thSemester">
                        <label class="form-check-label" for="mechanicalEngineering5thSemester">
                            5th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mechanicalEngineering6thSemester">
                        <label class="form-check-label" for="mechanicalEngineering6thSemester">
                            6th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mechanicalEngineering7thSemester">
                        <label class="form-check-label" for="mechanicalEngineering7thSemester">
                            7th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mechanicalEngineering8thSemester">
                        <label class="form-check-label" for="mechanicalEngineering8thSemester">
                            8th Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- Politics and Governance -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="politicsAndGovernance">
                <label class="form-check-label" for="politicsAndGovernance">
                    9. Politics and Governance
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="politicsAndGovernance4thSemester">
                        <label class="form-check-label" for="politicsAndGovernance4thSemester">
                            4th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="politicsAndGovernance5thSemester">
                        <label class="form-check-label" for="politicsAndGovernance5thSemester">
                            5th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="politicsAndGovernance6thSemester">
                        <label class="form-check-label" for="politicsAndGovernance6thSemester">
                            6th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="politicsAndGovernance7thSemester">
                        <label class="form-check-label" for="politicsAndGovernance7thSemester">
                            7th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="politicsAndGovernance8thSemester">
                        <label class="form-check-label" for="politicsAndGovernance8thSemester">
                            8th Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- qevsd -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="qevsd">
                <label class="form-check-label" for="qevsd">
                    10. qevsd
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="qevsd1stSemester">
                        <label class="form-check-label" for="qevsd1stSemester">
                            1st Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- Social Sciences -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="socialSciences">
                <label class="form-check-label" for="socialSciences">
                    11. Social Sciences
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="socialSciences1stSemester">
                        <label class="form-check-label" for="socialSciences1stSemester">
                            1st Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="socialSciences4thSemester">
                        <label class="form-check-label" for="socialSciences4thSemester">
                            4th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="socialSciences5thSemester">
                        <label class="form-check-label" for="socialSciences5thSemester">
                            5th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="socialSciences6thSemester">
                        <label class="form-check-label" for="socialSciences6thSemester">
                            6th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="socialSciences7thSemester">
                        <label class="form-check-label" for="socialSciences7thSemester">
                            7th Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="socialSciences8thSemester">
                        <label class="form-check-label" for="socialSciences8thSemester">
                            8th Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- Software Engineering -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="softwareEngineering">
                <label class="form-check-label" for="softwareEngineering">
                    12. Software Engineering
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="softwareEngineering1stSemester">
                        <label class="form-check-label" for="softwareEngineering1stSemester">
                            1st Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="softwareEngineering2ndSemester">
                        <label class="form-check-label" for="softwareEngineering2ndSemester">
                            2nd Semester
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="softwareEngineering3rdSemester">
                        <label class="form-check-label" for="softwareEngineering3rdSemester">
                            3rd Semester
                        </label>
                    </div>
                </div>
            </div>
            <!-- الصف الاول -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="firstClass">
                <label class="form-check-label" for="firstClass">
                    13. الصف الاول
                </label>
                <div class="ml-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="firstClassFirstSemester">
                        <label class="form-check-label" for="firstClassFirstSemester">
                            الفصل الاول
                        </label>
                    </div>
                </div>
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
                       Semester List
                    </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title </th>
          <th scope="col">Program >Semester</th>
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
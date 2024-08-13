¥
<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
?>

<div class="content-wrapper">
    <!-- main content start -->
    <div class="container-fluid pt-4 px-4">
    <div class="col-md-12 text-left">
                    <button type="button" class="btn btn-primary mr-2" onclick="window.location.href='transfer_in.php'"><i class="fa-solid fa-arrow-left"></i> Back</button>
                    <button type="button" class="btn btn-info"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                   
                </div>
    <br>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="basic-info-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="basic-info" aria-selected="true">Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="educational-info-tab" data-toggle="tab" href="#educational-info" role="tab" aria-controls="educational-info" aria-selected="false">Educational Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="documents-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="documents" aria-selected="false">Documents</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" id="transfer-tab" data-toggle="tab" href="#transfer" role="tab" aria-controls="transfer" aria-selected="false">Transfer Info</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-info-tab">
                <br>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first-name"> Name with initial *</label>
                            <input type="text" id="nwi" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last-name">Full Name *</label>
                            <input type="text" id="full-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        
                        
                    </div>
                    <div class="row mt-3">
                       
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="phone">Phone *</label>
                            <input type="tel" id="phone" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email">WhatsApp No *</label>
                            <input type="email" id="wno" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email *</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="gender">Gender *</label>
                            <select id="gender" class="form-control" required>
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="dob">Date Of Birth *</label>
                            <input type="date" id="dob" class="form-control" placeholder="mm/dd/yyyy" required>
                        </div>
                   
                        <div class="col-md-4">
                            <label for="emergency-phone">Emergency Phone</label>
                            <input type="tel" id="emergency-phone" class="form-control">
                        </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="religion">Religion</label>
                            <input type="text" id="religion" class="form-control">
                        </div>
                    
                        <div class="col-md-4">
                            <label for="marital-status">Marital Status</label>
                            <select id="marital-status" class="form-control">
                                <option value="">Select</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                        
                    
                        <div class="col-md-4">
                            <label for="national-id">National ID</label>
                            <input type="text" id="national-id" class="form-control">
                        </div>
                     </div>
                      <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="passport-no">Passport No</label>
                            <input type="text" id="passport-no" class="form-control">
                        </div>
                    
                        <div class="col-md-6">
                            <label for="admission-date">Admission Date *</label>
                            <input type="date" id="admission-date" class="form-control"  required>
                        </div>
                    </div>
                    <h5 class="mt-4 text-info">Sponsors Details</h5>
                     <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="admission-date">Sponsor Name *</label>
                            <input type="text" id="admission-date" class="form-control"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="admission-date">Contact Number *</label>
                            <input type="text" id="admission-date" class="form-control"  required>
                        </div>
                     </div>
                      <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="admission-date">Address *</label>
                            <input type="text" id="admission-date" class="form-control"  required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="admission-date">File Number *</label>
                            <input type="text" id="admission-date" class="form-control"  required>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="admission-date">Details of sponsorship *</label>
                            <input type="text" id="admission-date" class="form-control"  required>
                        </div>
                         <div class="col-md-6">
                            <label for="admission-date">Remark *</label>
                            <input type="text" id="admission-date" class="form-control"  required>
                        </div>
                      </div>
                    <h5 class="mt-4 text-info">Present Address</h5>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="present-state">Province</label>
                            <select id="present-state" class="form-control">
                                <option value="">Select</option>
                                <!-- Add options as needed -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="present-district">District/City</label>
                            <select id="present-district" class="form-control">
                                <option value="">Select</option>
                                <!-- Add options as needed -->
                            </select>
                        </div>
                    
                    
                        <div class="col-md-4">
                            <label for="present-address">Address</label>
                            <input type="text" id="present-address" class="form-control">
                        </div>
                    </div>
                    <h5 class="mt-4 text-infogit">Permanent Address</h5>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="permanent-state">State</label>
                            <select id="permanent-state" class="form-control">
                                <option value="">Select</option>
                                <!-- Add options as needed -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="permanent-district">District/City</label>
                            <select id="permanent-district" class="form-control">
                                <option value="">Select</option>
                                <!-- Add options as needed -->
                            </select>
                        </div>
                    
                        <div class="col-md-4">
                            <label for="permanent-address">Address</label>
                            <input type="text" id="permanent-address" class="form-control">
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="row mt-3">
                       
                        <div class="col-md-12 text-right">
                            <button type="button" class="btn btn-primary" onclick="nextTab('#educational-info-tab')">Next</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="educational-info" role="tabpanel" aria-labelledby="educational-info-tab">
                <!-- Educational Info Form -->
                <form>
                    <h5 class="mt-4">SCHOOL LEVEL EXAM INFORMATION</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="school-name">School Name</label>
                            <input type="text" id="school-name" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="school-exam-id">Exam ID</label>
                            <input type="text" id="school-exam-id" class="form-control">
                        </div>
                        <div class="col-md-3 ">
                            <label for="school-exam-year">Graduation Year</label>
                            <input type="number" id="gyear" class="form-control">
                        </div>
                        <div class="col-md-3 ">
                            <label for="school-exam-year">Graduation Point</label>
                            <input type="number" id="gpoint" class="form-control">
                        </div>
                    </div>
                    <h5 class="mt-4">HIGHER SECONDARY EXAM INFORMATION</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="college-name">College Name</label>
                            <input type="text" id="college-name" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="college-exam-id">Exam ID</label>
                            <input type="text" id="college-exam-id" class="form-control">
                        </div>
                        <div class="col-md-3 ">
                            <label for="college-exam-year">Graduation Year</label>
                            <input type="number" id="college-exam-year" class="form-control">
                        </div>
                        <div class="col-md-3 ">
                            <label for="college-exam-year">Graduation Point</label>
                            <input type="number" id="college-exam-year" class="form-control">
                        </div>
                    </div>
                     <h5 class="mt-4">ACADEMIC  INFORMATION</h5>
                     <div class="row">
                        <div class="col-md-6">
                            <label for="college-name">Student ID</label>
                            <input type="text" id="studentid" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="college-name">Batch</label>
                            <input type="text" id="batch" class="form-control">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                            <label for="college-name">Student ID</label>
                            <select name="" id="programe" class="form-control">
                            <option value="software engineering">software engineering</option>
                            </select>
                        </div>
                         <div class="col-md-6">
                            <label for="college-name">Session</label>
                            <select name="" id="session" class="form-control">
                            <option value="">session</option>
                            </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                            <label for="college-name">Semester</label>
                            <select name="" id="semester" class="form-control">
                            <option value="1st">1st</option>
                             <option value="2nd">2nd</option>
                              <option value="3rd">3rd</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="college-name">Section </label>
                            <select name="" id="section" class="form-control">
                            <option value="Section A">Section A</option>
                             <option value="Section B">Section B</option>
                              <option value="Section C">Section C</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="college-name">Status</label>
                            <select name="" id="status" class="form-control">
                            <option value="Pending">Pending</option>
                             <option value="Progress">Progress</option>
                              <option value="Complete">Complete</option>
                            </select>
                        </div>
                     </div>
                      <!-- Guardians Information -->
        <div class="mt-4">
            <h5>GUARDIANS INFORMATION</h5>
            <div id="guardian-info">
                <div class="guardian-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="relation">Relation *</label>
                            <input type="text" id="relation" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name">Name *</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="occupation">Occupation *</label>
                            <input type="text" id="occupation" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="phone">Phone *</label>
                            <input type="tel" id="phone" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="address">Address *</label>
                            <input type="text" id="address" class="form-control" required>
                        </div>
                   
                    <div class="col-md-4">
                    <button type="button" class="btn btn-danger mt-3 remove-guardian">Remove</button>
                     </div>
                    <hr>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-3" id="add-guardian">Add </button>
        </div>
         <!-- Navigation Buttons -->
            <div class="row mt-3">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-secondary mr-2" onclick="previousTab('#basic-info-tab')">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextTab('#documents-tab')">Next</button>
                </div>
                </div>
                
                </form>
            </div>
        </div>
            <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                <!-- Documents Form -->
                <form>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <label for="photo-upload">Photo: Best Resolution Height- 300 PX, Width- 300 PX</label>
                            <input type="file" id="photo-upload" class="form-control-file">
                        </div>
                        <div class="col-md-6">
                            <label for="signature-upload">Upload Signature</label>
                            <input type="file" id="signature-upload" class="form-control-file">
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-secondary mr-3" onclick="previousTab('#basic-info-tab')">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextTab('#transfer-tab')">Next</button>
               </div>
                    </div>
                    
                </form>
           
    
</div>
<br>
<div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
    <!-- Transfer-info Form -->
    <form>
        <div class="row">
            <div class="col-md-4">
                <label for="photo-upload">Transfer ID *</label>
                <input type="text" id="transfer_id" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="signature-upload">University Name *</label>
                <input type="text" id="university_name" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="signature-upload">Date *</label>
                <input type="date" id="date" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="signature-upload">Note </label>
                <textarea name="note" id="note" class="form-control"></textarea>
            </div>
        </div>

        <br><br>

        <div id="inputContainer">
            <div class="form-row align-items-end mb-2">
                <div class="col-6">
                    <label for="session">Session *</label>
                <select name="session" id="session" class="form-control">
                    <option value="all">All</option>
                    </select>                
                </div>
                <div class="col-6">
                    <label for="semester">Semester *</label>
                     <select name="semester" id="semester" class="form-control">
                    <option value="all">All</option>
                    </select>                 
                </div>
                <div class="col-6">
                    <label for="course">Course *</label>
                <select name="course" id="course" class="form-control">
                    <option value="all">All</option>
                    </select>                
                 </div>
                <div class="col-6">
                    <label for="mark">Mark *</label>
                    <input type="text" class="form-control" name="mark" required>
                </div>
                <br>
                <div class="col-auto">
                    <button type="button" class="btn btn-success add-button">Add</button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-secondary mr-3" onclick="previousTab('#basic-info-tab')">Previous</button>
                <button type="button" class="btn btn-success" type="submit">Finish</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
    <!-- main content end -->




<?php include '../includes/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        function nextTab(tab) {
            $(tab).tab('show');
        }

        function previousTab(tab) {
            $(tab).tab('show');
        }

        function addDocument() {
            var documentField = `
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="document-type">Document Type</label>
                        <input type="text" class="form-control" name="document-type">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="document-file">Upload Document</label>
                        <input type="file" class="form-control-file" name="document-file">
                    </div>
                </div>`;
            $('#dynamic-documents').append(documentField);
        }
    </script>
    <script>
    $(document).ready(function () {
        // Handle Add button click
        $('.add-button').click(function () {
            var newRow = `
                <div class="form-row align-items-end mb-2">
                    <div class="col-6">
                    <label for="session">Session *</label>
                <select name="session" id="session" class="form-control">
                    <option value="all">All</option>
                    </select>                
                </div>
                <div class="col-6">
                    <label for="semester">Semester *</label>
                     <select name="semester" id="semester" class="form-control">
                    <option value="all">All</option>
                    </select>                 
                </div>
                <div class="col-6">
                    <label for="course">Course *</label>
                <select name="course" id="course" class="form-control">
                    <option value="all">All</option>
                    </select>                
                 </div>
                <div class="col-6">
                    <label for="mark">Mark *</label>
                    <input type="text" class="form-control" name="mark" required>
                </div>
                <br>
                    <div class="col-auto">
                        <button type="button" class="btn btn-danger remove-button">Remove</button>
                    </div>
                </div>
            `;
            $('#inputContainer').append(newRow);
        });

        // Handle Remove button click
        $('#inputContainer').on('click', '.remove-button', function () {
            $(this).closest('.form-row').remove();
        });
    });
</script>
<?php include '../includes/script.php' ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="assests/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

   <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="assests/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link">
                           <i class="fa-solid fa-gauge"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <!-- Admission Menu -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-university"></i>
                            <p>
                                Admission
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="application.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Application</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        New Registration
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="add_student.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Student</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="student_list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Transfer</p>
                                     <i class="right fas fa-angle-left"></i>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="transfer_in.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Transfer In</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="transfer_out.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Transfer Out</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="status_type.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Status Type</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Setting</p>
                                    <i class="right fas fa-angle-left"></i>
                                </a>
                                 <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="id_card_setting.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>ID Card Setting</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Attendance
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="subject_atten.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Subject Attendance</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="atten_report.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Attendance Report</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Students Menu -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-user-graduate"></i>
                            <p>
                                Students
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="leave_manage.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Leave Management</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="student_notes.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Notes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Enrolls</p>
                                    <i class="right fas fa-angle-left"></i>
                                </a>
                                 <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="single_enroll.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Single Enrolls</p>
                                        </a>
                                    </li>
                                </ul>
                                 <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="group_enroll.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Group Enrolls</p>
                                        </a>
                                    </li>
                                </ul>
                                 <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="course_add_drop.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Course Add Drop</p>
                                        </a>
                                    </li>
                                </ul>
                                 <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="course_complete.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Course Complete</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="student_alumni.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student Alumni</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Facilities
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="create_faculty.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Create Faculty</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Program
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="create_program.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Create Program</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Academic Menu -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fab fa-accusoft"></i>
                            <p>
                                Academic
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="batches.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Batches</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Sessions
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="sessions.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Create Session</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="semesters.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Semester</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="sections.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Section</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="classrooms.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Classroom</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Courses
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="add_course.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Courses</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Enroll Courses
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="Create_enroll_course.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Create Enroll Course</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="class_routine.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Class Routine</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="exam_routine.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exam Routine</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="lecture_routine.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lecture Routine</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Setting
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="s_class_routine.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Class Routine</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="s_exam_routine.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Exam Routine</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                  <!--Examinations-->
                   <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-file-alt"></i>
                            <p>
                                Examinations
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="exam_attendance.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exam Attendance</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="exam_mark_ledger.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exam Mark Ledger</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="exam_result.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exam Result</p>
                                   
                                </a>
                                  </li>
                            <li class="nav-item">
                                <a href="course_mark_ledger.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Course Mark Ledger</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="course_result.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Course Result
                                    </p>
                                </a>
                                </li>
                            <li class="nav-item">
                                <a href="grading_system.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Grading System
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="exam_type.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Exam Types
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="admit_cards.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Admit Cards
                                    </p>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Setting
                                    </p>
                                     <i class="right fas fa-angle-left"></i>
                                </a>
                           <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="admit_setting.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Admit Setting</p>
                                        </a>
                                    </li>
                                </ul>
                                 <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="contribution.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Contribution</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                            <!--Study Matirial-->
                         <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-newspaper"></i>
                            <p>
                                Student Materials
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="assignment_list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Assignment List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="content_list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                       Content List
                                       
                                    </p>
                                </a>
                               
                            </li>
                            <li class="nav-item">
                                <a href="content_types.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Content Types</p>
                                </a>
                            </li>
                            
                            
                           
                               
                            
                        </ul>
                    </li>
               
                   </li>
                   <!-- Fees Collection -->
        <li class="nav-item">
          <a href="#" class="nav-link">
           <i class="fas fa-money-bill-wave"></i>
            <p>
              Fees Collection
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Student Fees
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="fees_due.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fees Due</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="quick_assign.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Quick Assign</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="quick_received.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Quick Received</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="fees_report.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fees Report</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="fees_master.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fees Master</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="fees_type.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fees Types</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="fees_discount.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fees Discount</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Setting
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="fees_fines.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fees Fines</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="receipt_setting.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Receipt Setting</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
                <!--Inventory-->
                 <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-dolly-flatbed"></i>
                            <p>
                                Inventory
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="item_issues.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Item Issues</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="item_stock.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                      Item Stock
                                       
                                    </p>
                                </a>
                               
                            </li>
                            <li class="nav-item">
                                <a href="item_list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Item List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="item_store.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Item Stores</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="item_supplier.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Item Suppliers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="item_category.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Item Categories</p>
                                </a>
                            </li>
                            
                            
                           
                               
                            
                        </ul>
                    </li>
               
                   </li>
        </li>
                      <!--Transcripts-->
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-address-card"></i>
                            <p>
                               Transcripts
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="semester_marksheet.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Semester Marksheet</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="certificate.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                      Certificate
                                       
                                    </p>
                                </a>
                               
                            </li>
                        </ul>
                      </li>
                </ul>

            </nav>
            <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

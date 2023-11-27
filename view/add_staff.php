<style type="text/css">
    label{
        color: darkgray;
    }
</style>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add New Staff</h6>
            </div>

           <!--  <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=allPro" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> View Products</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        
                                       <form method="post" enctype="multipart/form-data">
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">First Name</label>
                                                    <input type="text" name="first_name" class="form-control"
                                                    placeholder="First Name">
                                                </div>

                                                <div class="col-sm-6">
                                                     <label class="col-form-label">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control"
                                                    placeholder="Last Name">
                                                </div>

                                            </div>

                                             <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Phone</label>
                                                    <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Email</label>
                                                    <input type="text" name="Email" class="form-control"
                                                    placeholder="Email">
                                                </div>

                                            </div>

                                             <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Date of Birth</label>
                                                    <input type="date" name="date_of_birth" class="form-control"
                                                    placeholder="date_of_birth">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option>--Select Gender--</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>

                                            </div>


                                             <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Address</label>
                                                    <input type="text" name="resident_address" class="form-control"
                                                    placeholder="Address">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Marital Status</label>
                                                    <select class="form-control" name="marital_status">
                                                        <option>--Select Marital Status--</option>
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Divorced</option>
                                                    </select>
                                                </div>

                                             
                                            </div>

                                               <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Hometown</label>
                                                    <input type="text" name="hometown" class="form-control"
                                                    placeholder="Hometown">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Basic Salary</label>
                                                    <input type="text" name="basic_salary" class="form-control"
                                                    placeholder="Basic Salary">
                                                </div>
                                            </div>

                                       

                                            <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Position</label>

                                                     <select class="form-control" name="position">
                                                        <option>--Select Postition--</option>
                                                        <option>CEO </option>
                                                         <option>MD </option>
                                                        <option>Operational Manager</option>
                                                        <option>Accountant</option>
                                                        <option>Supervisor</option>
                                                        <option>Sales Rep</option>
                                                        <option>Clearing Desk</option>
                                                        <option>FrontDesk</option>
                                                        <option>Security</option>
                                                        <option>Driver</option>
                                                        <option>Cleaner</option>
                                                    </select>

                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Department</label>
                                                    <input type="text" name="department" class="form-control"
                                                    placeholder="department">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Supervisor (Optional)</label>
                                                    <input type="text" name="supervisor" class="form-control"
                                                    placeholder="Supervisor">
                                                </div>

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Category</label>
                                                    <select class="form-control" name="category">
                                                        <option>--Select Category--</option>
                                                        <option>Full-time</option>
                                                        <option>Part-time</option>
                                                        <option>Contract</option>
                                                    </select>
                                                </div>


                                            </div>

                                                  <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Grantor Name</label>
                                                    <input type="text" name="grantor_name" class="form-control"
                                                    placeholder="Grantor Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Grantor Phone</label>
                                                    <input type="text" name="grantor_phone" class="form-control"
                                                    placeholder="Grantor Phone">
                                                </div>
                                            </div>


                                                  <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Grantor Address</label>
                                                    <input type="text" name="grantor_address" class="form-control"
                                                    placeholder="Grantor Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Relationship</label>
                                                    <select class="form-control" name="grantor_relationship">
                                                        <option>--Select Relationship--</option>
                                                        <option>Father</option>
                                                        <option>Mother</option>
                                                        <option>Brother</option>
                                                        <option>Sister</option>
                                                        <option>Son</option>
                                                        <option>Daugther</option>
                                                        <option>Husband</option>
                                                        <option>Wife</option>
                                                        <option>Guardian</option>
                                                        <option>Friend</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Appointment Date</label>
                                                    <input type="date" name="start_date" class="form-control">
                                                </div>


                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Passport</label>
                                                   <!--  <input type="file" class="form-control"
                                                    placeholder="Image" id="image" name="passport"  accept="image/*" onchange="loadFile(event)"> -->

                                                    <input type="file" class="form-control" name="passport" id="image" placeholder="Image"  accept="image/*" onchange="loadFile(event)">
                                                </div>
                                            </div>




                                            <div class="form-group row mb-3 mt-3">
                                               
                                                <div class="col-sm-6">
                                                    <button type="submit" name="RegStaff" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-*">
                                                           Add Staff
                                                    </button>
                                                </div>

                                                <div class="col-sm-6">
                                                    <img class="img-fluid image-responsive w-100n mx-auto" style="max-height: 300px; max-width: 300px;"  id="output" />
                                                </div>
                                            </div>

                                            
                                          
                                          </form> 

                                        </div>
                                        <!-- end row -->
                                       
                                        <!-- end row -->
                                      
                                        <!-- end row -->
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->

                        </div>  
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script type="text/javascript">
        function GenerateInvoiceNumber() {
        var fieldID = document.getElementById("productcode");
        var number = Math.floor(Math.random() * 90000) + 10000;
        var word = "101";
        var JoinOn = word + number;
        fieldID.value = JoinOn;
         }

     </script>
<?php 
$maineg = new  mainClass();
$DBinfo = $maineg->Targeted_information('staff','staff_id',$_GET['editSaffDeatails']);
$from = "₦";
?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Staff</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=View_staff" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                  <div class="col-lg-12 col-xl-12">
                          <div class="card">
                          <div class="card-body">
                          <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Edit</h4>
                            </div>
                          </div>
                           <form accept="" method="post">
                                           
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Customer Name</label>
                                                    <input type="text" name="firstname"  class="form-control" value="<?php echo $DBinfo['firstname']?>">
                                               

                                                    <input type="text" hidden value="<?php echo $DBinfo['staff_id']?>" name="staff_id">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Lastname</label>
                                                    <input type="text" class="form-control" value="<?php echo $DBinfo['lastname'];?>" name="lastname">
                                                </div>
                                            </div>

                                             <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Staff ID</label>
                                                    <input readonly type="text" class="form-control" name="staff_id" value="<?php echo $DBinfo['staff_id']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Email </label>
                                                    <input type="text" class="form-control" name="email" value="<?php echo $DBinfo['email']?>">
                                                </div>

                                            </div>
                                            
              

                                      
                                            
                                           <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Basic Salary</label>
                                                    <input type="text" class="form-control" name="basic_salary" value="<?php echo $DBinfo['basic_salary']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Phone</label>
                                                    <input type="text" class="form-control" name="phone" value="<?php echo $DBinfo['phone']?>">
                                                </div>

                                            </div>
                                            
                                            
                                            
                                              <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Grantor Name</label>
                                                   <input type="text" class="form-control" name="grantor_name" value="<?php echo $DBinfo['grantor_name']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Address</label>
                                                    <input type="text" class="form-control" name="resident_address" value="<?php echo $DBinfo['resident_address']?>">
                                                </div>

                                            </div>
                                            
                                            
                                            
                                            
                                            
                                               <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Grantor Address</label>
                                                   <input type="text" class="form-control" name="grantor_address" value="<?php echo $DBinfo['grantor_address']?>">
                                                </div>
                                                
                                                  <div class="col-sm-6">
                                                    <label class="col-form-label">Grantor Relationship</label>
                                                   <input type="text" class="form-control" name="relationship" value="<?php echo $DBinfo['relationship']?>">
                                                </div>


                                              

                                            </div>
                                            
                                            
                                            
                                              <div class="form-group row mb-3">
                                                  
                                                    <div class="col-sm-6">
                                                    <label class="col-form-label">Gender </label>
                                                     <select class="form-control" name="gender">
                                            <option><?php echo $DBinfo['gender']?></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>

                                                </div>
                                                
                                              
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Supervisor</label>
                                                    <input type="text" class="form-control" name="supervisor" value="<?php echo $DBinfo['supervisor']?>">
                                                </div>

                                            </div>
                                            
                                            
                                            
                                                   <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Grantor Phone</label>
                                                   <input type="text" class="form-control" name="grantor_phone" value="<?php echo $DBinfo['grantor_phone']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Position</label>
                                                   <select class="form-control" name="position">
                                    <option><?php echo $DBinfo['position']?></option>
                                     <option>CEO</option>
                                    <option>MD</option>
                                   
                                    <option>Operational Manager</option>
                                    <option>Assistant Operational Manager</option> 
                                    <option>Secretary</option>
                                    <option>Accountant</option>
                                    <option>Receptionist</option>
                                    <option>Invoice Personnel</option>
                                    <option>Supervisor</option>
                                    <option>ICT</option>
                                    <option>Engineers</option>
                                    <option>Sales Person</option>
                                    <option>Sales Reps</option>
                                    <option>Cashier</option>
                                         <option>Clearing Desk</option>
                                    <option>Worker</option>
                                    <option>Security</option>
                                    <option>Driver</option>
                                    <option>Cleaner</option>
                                </select>
                                                </div>

                                            </div>
                                            
                                            
                                            
                                            
                                            
                                                   <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Appointment Date</label>
                                                   <input type="text" class="form-control" name="appointment_date" value="<?php echo $DBinfo['appointment_date']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Department (Section) </label>
                                                    <select class="form-control" name="department">
                                  <option disabled selected >--Select Department --</option>
                                    <option>Administrating</option>
                                    <option>Secretary</option>
                                    <option>Stock</option>
                                    <option>ICT</option>
                                    <option>Sales</option>
                                    <option>Marketing </option>
                                    <option>Management </option>
                                    <option>Managerial</option>
                                    <option>Accounting </option>
                                     <option>Clearing </option>
                                    <option>Security </option>
                                    <option>Cleaning </option>
                                    <option>Supervising </option>
                                </select>
                                                </div>

                                            </div>
                                            
                                            
                                            
                                            
                                            

                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                   <label class="col-form-label">Category</label>
                                               <select name="category" class="form-control" >
                                                    <option><?php echo $DBinfo['category']?></option>
                                                    <option>Full-time</option>
                                                    <option>Part-time</option>
                                                    <option>Contract</option>
                                               </select>
                                               </div>
                                                 

                                               <div class="col-sm-6">
                                               <label class="col-form-label">Hometown</label>
                                               <input type="text" class="form-control" name="home_town" value="<?php echo $DBinfo['home_town']?>">
                                               </div>
                                            </div>
                                            
                                            
                                            
                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Status</label>
                                                    <input readonly type="text" class="form-control" name="status" value="<?php echo $DBinfo['status']?>">
                                                </div>
                                                 

                                               <div class="col-sm-6">
                                               <label class="col-form-label">Marital Status</label>
                                          
                                               <select class="form-control" name="marital_status">
                                                <option><?php echo $DBinfo['marital_status']?></option>
                                                <option>Divorced</option>
                                                <option>Married</option>
                                                <option>Single</option>

                                            </select>
                                               </div>
                                            </div>





                                             <div class="form-group row mb-3">
                                                 
                                                   <div class="col-sm-6">
                                               <label class="col-form-label">DOB</label>
                                               <input type="text" class="form-control" name="date_of_birth" value="<?php echo $DBinfo['date_of_birth']?>">
                                               </div>
                                                  
                                            
                                            
                                            
                                                 <div class="col-sm-6">
                                                    <br><br>
                                                    <button type="submit" name="updateStaff" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-*">
                                                           Update Staff
                                                    </button>
                                                    
                                                
                                                </div>
                                            </div>


                                        </form>
                            </div>
                        </div>  
                    </div>

                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

     <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
           
    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Send Email</h6>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                <th><input type="checkbox" onClick="toggle(this)" ></th>
                                                    <th>Customer  Name</th>
                                                    <th>Account ID</th>
                                                    <th>phone</th> 
                                                    <th>Email</th>
                                                   <th>Address</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                            <?php
                                           $maineg = new mainClass();
                                           $result = $maineg->users();
                                           $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) {     
                                                      echo'<tr>
                                            <td><input type="checkbox" name="customer_email[]" value="'.$result[$k]["email"].'"></td>
                                            <td>'.$result[$k]["name"].'</td>
                                            <td>'.$result[$k]["customer_code"].'</td>
                                            <td>'.$result[$k]["phone"].'</td>
                                            <td>'.$result[$k]["email"].'</td>
                                            <td>'.$result[$k]["address"].'</td>
                                            </tr>';
                                                }
                                              }
                                           ?>
                                            </tbody>
                                        </table>
                                        <br>
                                       <!-- <a href="" class="btn btn-info" data-toggle="modal" data-target="#mailsnd">Send email to selected customer</a> -->

                                        <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Send email to selected customer</button>

                                    </div>
                                </div>
                            </div> 
                             <div id="styleSelector">

                             </div>
                        </div> 

<!-- 

                          <div class=" modal fade" id="mailsnd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Compose Customer email</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">


                <input type="text" name="subject" class="form-control" placeholder="Subject" value=""><br />

                <textarea onkeyup="textCounter()" id="MessageBox" required class="form-control" name="msg_body" placeholder="compose message" style="height:300px; resize:none;"></textarea>

             


            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="send_email">Send message</button>
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

            </div>
        </div>
   </div>
</div> -->



<div class="col-sm-6 col-md-4 col-xl-3">
   <!--  <div class="my-4 text-center">
        <p class="text-muted">Compose Customer email</p>
    </div> -->
        
                                                <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Compose Customer email
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">


                <input type="text" name="subject" class="form-control" placeholder="Subject" value=""><br />

                <textarea onkeyup="textCounter()" id="MessageBox" required class="form-control" name="msg_body" placeholder="compose message" style="height:300px; resize:none;"></textarea>
                    

                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary waves-effect"
                        data-bs-dismiss="modal">Close</button>
                    <button  type="submit" name="send_email" class="btn btn-primary waves-effect waves-light">Send message</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

                
<script>
 function toggle(source) {
  checkboxes = document.getElementsByName('customer_email[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>


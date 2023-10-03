<style>

.clock {
  
    font-size: 16px;
    font-family:Orbitron;
    letter-spacing: 7px;
    


}
</style>

  <script language="javascript" type="text/javascript">

      //Clock

 var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;

   //Clock
       
     </script>



  <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Welcome <span class="ml-5 text-danger"><?php echo date("l, F - j - Y"); ?> </span></h6>

                               
           
                                   <!--  <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                                    </ol> -->
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                       <!--  
                                        <a href="#" class="d-sm-inline-block btn btn-sm btn-primary">
                                                <div id="MyClockDisplay" class="clock"></div>
                                        </a> -->

                                        <form name="clock" method="POST" action="#">
                                            <input style="width:150px;border-radius: 5px;height: 30px;" class="d-sm-inline-block text-white btn btn-sm btn-primary" readonly  name="face" value="">
                                         </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <i class="fas fa-cubes   fa-2x text-white"></i>
                                                <!-- <img src="assets/images/services-icon/01.png" alt=""> -->
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">All Stock</h5>
                                            <h4 class="fw-medium font-size-24"><?php $maineg = new mainClass();
                                                        $result = $maineg->My_Count_Fetchstock('stock_table');
                                                        ?> 
                                            <i class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                           <!--  <div class="mini-stat-label bg-success">
                                                <p class="mb-0">+ 12%</p>
                                            </div> -->
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Stocks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-danger text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <i class="fas fa-archive fa-2x text-white"></i>
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Low Stock</h5>
                                            <h4 class="fw-medium font-size-24">
                                                <?php 
                                                  $maineg = new mainClass();
                                                  $result = $maineg->My_Count_FetchLOWS('stock_table');
                                                ?> 
                                            </h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0 mt-1">Low Stocks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-success text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <i class="fas fa-shopping-cart fa-2x text-white"></i>
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Sales</h5>
                                            <h4 class="fw-medium font-size-24">
                                                <?php $maineg = new mainClass();
                                                    $result = $maineg->My_Count_Fetchtotal('invoice_details');
                                                ?> 
                                            </h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0 mt-1">Sales Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-info text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <i class="fas fa-money-bill fa-2x text-white"></i>
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Income</h5>
                                            <h4 class="fw-medium font-size-24">
                                                <?php $maineg = new mainClass();
                                                   if($result = number_format($maineg->My_Count_Fetchiincom('invoice_tbl')) > 0){
                                                      $result = number_format($maineg->My_Count_Fetchiincom('invoice_tbl'));
                                                   }else{
                                                      echo 0;
                                                   }
                                                ?> 
                                            </h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0 mt-1">Today's Income</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Monthly Earning</h4>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div>
                                                    <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">This month</p>
                                                            <h3>$34,252</h3>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                                will be occidental.</p>
                                                            <span class="peity-donut"
                                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                                data-width="72" data-height="72">4/5</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">Last month</p>
                                                            <h3>$36,253</h3>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                                will be occidental.</p>
                                                            <span class="peity-donut"
                                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                                data-width="72" data-height="72">3/5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sales Report</h4>

                                        <div class="cleafix">
                                            <p class="float-start"><i class="mdi mdi-calendar me-1 text-primary"></i> Jan 01
                                                - Jan 31</p>
                                            <h5 class="font-18 text-end">$4230</h5>
                                        </div>

                                        <div id="ct-donut" class="ct-chart wid"></div>

                                        <!-- <div class="mt-4">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td><span class="badge bg-primary">Desk</span></td>
                                                        <td>Desktop</td>
                                                        <td class="text-end">54.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge bg-success">Mob</span></td>
                                                        <td>Mobile</td>
                                                        <td class="text-end">28.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge bg-warning">Tab</span></td>
                                                        <td>Tablets</td>
                                                        <td class="text-end">17.5%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> -->
                                    </div>
                                </div>

                            </div>

                          </div>
                        <!-- end row -->

                     


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Recent Sales</h4>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                 <tr>
                                                      <!--<th scope="col">(#) Id</th>
                                                      <th scope="col">Name</th>
                                                      <th scope="col">Date</th>
                                                      <th scope="col">Amount</th>
                                                      <th scope="col" colspan="2">Status</th> -->

                                                      <th scope="col">No</th>
                                                      <th scope="col">Sale's Rep</th>
                                                      <th scope="col">Date</th>
                                                      <th scope="col">Product</th>
                                                      <th scope="col">Total Price</th>
                                                      <th scope="col">Customer Name</th> 
                                                    </tr>
                                            </thead>


                                            <tbody>
                                                   <?php
                                                  $maineg = new mainClass();
                                                  $result = $maineg->daily_sales();
                                                  $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) {     
                                                  echo'<tr>
                                                  <td>'.$count++.'</td>
                                                  <td>'.$result[$k]["sales_rep"].'</td>
                                                  <td>'.$result[$k]["order_date"].'</td>
                                                  <td>'.$result[$k]["product_name"].'</td>
                                                  <td style="color:dark-gray;">'.$result[$k]["total"].'</td>
                                                  <td>'.$result[$k]["customer"].'</td>
                                                  </tr>';
                                                      }
                                                    }
                                                  ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
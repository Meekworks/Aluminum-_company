    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Send Sms To Customer</h6>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                     <form action="#" method="POST">

                                    <p>Receiver Phone:<input type="text"  class="form-control" name="customer_phone"></p>
                                    <p>Message:<textarea class="form-control" onkeyup="textCounter()" id="MessageBox" maxlength="160" required class="form-control" name="msg_body" placeholder="compose message" style="height:250px;"></textarea></p>
                                    <span id="chars">160</span><b> Character remaining</b>
                                    <p><input type="submit" class="btn btn-primary form-control" value="Send Sms" name="send_smsS"></p>
                                    </form>

                                    </div>
                                </div>
                            </div> 
                             <div id="styleSelector">

                             </div>
                        </div> 


<script>
    function textCounter() {
        var chars = document.getElementById("chars");
        var MessageBox = document.getElementById("MessageBox");

        if (chars.innerText == "0") {

        } else if (MessageBox.value.length == 0) {

            var maxLength = 160;
            var length = MessageBox.value.length;
            var NewLength = maxLength - length;
            chars.innerText = NewLength;

        } else {
            var maxLength = 160;
            var length = MessageBox.value.length;
            var NewLength = maxLength - length;
            chars.innerText = NewLength;
        }

    }
</script>
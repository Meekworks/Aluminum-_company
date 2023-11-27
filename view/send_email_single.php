    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Send Email Single</h6>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="#" method="POST">

<p>Receiver:<input type="text" class="form-control" name="receiver"></p>

<p>Subject:<input type="text" value="" class="form-control" name="subject"></p>

<p>Message:<textarea class="form-control" name="message" style="height:250px;"></textarea></p>
<p><input type="submit" class="btn btn-primary form-control" value="Send Mail" name="snd"></p>
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
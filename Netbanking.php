<!DOCTYPE html>
<html>
<body>
<style> body{
background-image: url('netbank.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: url('netbank.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
opacity: 0.9;
}
li a {
background-color:black;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

li a:hover {
  background-color:black;
opacity: 1;
}
</style>

<form align="center">
<ul>
<li style="float:left"><a href="http://localhost/dashboard/paymentmethod.html">Back</a></li>
<li style="float:right"><a href="http://localhost/dashboard/home.html">Home</a></li>
</ul>
<br><br><br><br><br><h1 class="display-4" align="center">NET BANKING</h1>
<div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h4>Select your Bank</h4>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>SBI</option>
                                <option>IOB</option>
                                <option>CUB</option>
                                <option>KVB</option>
                                <option>LVB</option>
                                <option>CBI</option>
                                <option>HDFC</option>
                                <option>IDBI</option>
                                <option>ICICI</option>
                                <option>BOB</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i><h3> Proceed Pyment</h3></button> </p>
                        </div>
                        <p class="text-muted"><h4>Note:</h4>After clicking on the button, you will be directed to a secure gateway for payment.<br>After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div>
</form>
</body>
</html>
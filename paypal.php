<!DOCTYPE html>
<html>
<body>
<form align="center">
<style> body{
background-image: url('paypal.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: url('paypal.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
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
<div id="paypal" class="tab-pane fade pt-3">
<ul>
<li style="float:left"><a href="http://localhost/dashboard/paymentmethod.html">Back</a></li>
<li style="float:right"><a href="http://localhost/dashboard/home.html">Home</a></li>
</ul>
                        <h3 class="pb-2"><br><br><br><br><br><br><br><br>Select your paypal account type</h3>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div><br>
                        <p> <button type="button" class="btn btn-primary "> <h3> Log into my Paypal </h3></button> </p><br>
                        <p class="text-muted"><h3> <br><br><br><br>Note: </h3>After clicking on the button, you will be directed to a secure gateway for payment.<br>After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div>
</form>
</body>
</html>
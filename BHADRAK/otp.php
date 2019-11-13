<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
</head>
<body>

<p id="ok"></p>

<script>
var setlimit = new Date().getTime() + 60000;//FOR 60 SECONDS

var x = setInterval(function() {    

    var currenttime = new Date().getTime();
    var distance = setlimit - currenttime;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // document.getElementById("ok").innerHTML = days + "d " + hours + "h "
    // + minutes + "m " + seconds + "s ";
    $('#ok').html(days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ");
  
    if (distance < 0) {
        clearInterval(x);
        //document.getElementById("#ok").innerHTML = "EXPIRED";
         $('#ok').html("EXPIRED");
       //document.getElementById("ok").submit();
        $('#ok2').submit();
        window.alert('Your session has been expired');
        window.location="index.php"; 
    }
},1000);
// function SubmitForm(){
//     $("#ok2").submit();
// };
// setTimeout(SubmitForm,5000);
</script>
	<center>
<h1>PLEASE VERIFY YOUR OTP HERE</h1>

<form action="otpcheck.php" method="post">

<input type="text" name="otp">

<input type="submit" name="submit">

</form>
</center>
</body>
</html>
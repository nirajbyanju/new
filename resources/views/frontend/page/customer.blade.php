<?php
$con = mysqli_connect("localhost","root","","demos");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>
<?php
include_once("config.php");
?>
<table>
<tr>
<th width="24%"  height="46" scope="row">Email Id :</th>
<td width="71%" ><input type="email" name="email" id="emailid" onBlur="checkemailAvailability()" value="" class="form-control" required /></td>
</tr>
<tr>
<th width="24%"  scope="row"></th>
<td >   <span id="email-availability-status"></span> </td>
</tr>
<tr>
<th height="42" scope="row">User Name</th>
<td><input type="text" name="username" id="username" value="" onBlur="checkusernameAvailability()" class="form-control" required /></td>
</tr>
<tr>
<th width="24%"  scope="row"></th>
<td >   <span id="username-availability-status"></span> </td>
</tr>
</table>
4. Jquery/ajax script where you pass variable to check_availability.php page. put this in index.php inside head.

<script>
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
function checkusernameAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#username-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
5.check_availability.php page in this page you will check yhe availablity of email or email

<?php
require_once("config.php");
//code check email
if(!empty($_POST["emailid"])) {
$result = mysqli_query($con,"SELECT count(*) FROM email_availabilty WHERE email='" . $_POST["emailid"] . "'");
$row = mysqli_fetch_row($result);
$email_count = $row[0];
if($email_count>0) echo "<span style='color:red'> Email Already Exit .</span>";
else echo "<span style='color:green'> Email Available.</span>";
}
// End code check email
//Code check user name
if(!empty($_POST["username"])) {
	$result1 = mysqli_query($con,"SELECT count(*) FROM email_availabilty WHERE username='" . $_POST["username"] . "'");
	$row1 = mysqli_fetch_row($result1);
	$user_count = $row1[0];
	if($user_count>0) echo "<span style='color:red'> Username already exit .</span>";
	else echo "<span style='color:green'> Username Available.</span>";
}
// End code check username
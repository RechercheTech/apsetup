<?php
$AP_SSID = $_POST['AP_SSID'];
$AP_PASS = $_POST['AP_PASS'];


if(empty($AP_SSID ) || empty($AP_PASS )) {
echo "<h2>You must fill in all fields</h2>\n" ;
die ("Click Back to start again.");
}
echo "<center><h3>New access point settings</h3<br><br></center>";
echo "<center><br><b>Network name (SSID):</b>&nbsp;";
echo $AP_SSID."</center>";
echo "<center><br><br><b>Passphrase:</b>&nbsp;";
echo $AP_PASS."</center>";
echo "<br><br><center><b>Restart the Akobox to effect the change.</b></center>";
?>
<?php
$cmd = "/usr/bin/apsetup $AP_SSID $AP_PASS";
system($cmd,$return_value);
?>


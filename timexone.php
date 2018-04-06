<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set('Asia/Kolkata');
echo "<p>Copyright &copy; 1999-" . date("Y");
$rishi = array('rishi' => 'sharma' );
$drivers=(PDO::getAvailableDrivers()) ;
print_r($drivers) ;
print_r($rishi) ;
?>

</body>
</html

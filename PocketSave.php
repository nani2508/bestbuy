
<?php

include 'PocketSave.php'; 


$P_save = new PocketSave();


//$P_save->Average(1, 2, 3, 4, 5); // 3
$prices=array(5,2, 3, 1, 6, 7);
$min=	$P_save->_comparePricesForLeast(5,2, 3, 1, 6, 7);
echo $min;
?>


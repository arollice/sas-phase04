<?php 

require_once('../../private/initialize.php');

$test = $GET_['test'] ?? '';

if($test == '404')  {
 error_404(); 
} else if ($test == '500'){
  error_500();
} else {
  echo 'No error';
}
?>
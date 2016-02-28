<?PHP
   $data = file_get_contents('php://input');
   if (!(file_put_contents($_GET['fileName'],$data) === FALSE)) file_put_contents($_GET['fileName'],$data);
   else echo "File xfer failed.";
?>

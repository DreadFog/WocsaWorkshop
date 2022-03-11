<?php 
$command = 'echo ' . $_POST['user_info'] . '> /tmp/commande.sh' ;
$output = shell_exec($command);

?>


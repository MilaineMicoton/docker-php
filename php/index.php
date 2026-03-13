<?php
echo 'Bonjour de PHP';
/*phpinfo();*/

require_once 'connect.php';
$sql = 'select * from `client`;';

$query = $db->query($sql);
var_dump ($query->fetchAll());

<html> 
<link rel="stylesheet" href="style.css">

<div class="container column">
<h1>Log Book</h1>

<?php

$filename = 'yoururlgoeshereto/log.txt';

$data = file($filename);
foreach ($data as $line_num=>$line)
{
    echo '<b>'.$line_num.'</b> '.$line.'<br/>';
}
?>
</html>

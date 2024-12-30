<?php
$file="counter.txt";
if(!file_exists($file)){
    file_put_contents($file,"0");
}
$old_count=file_get_contents($file);
$new_count=$old_count+1;
file_put_contents($file,$new_count)
?>
<html>
<body>
<h1>Visitor Count</h1>
<p>The Count is <?php echo $new_count ?></p>
</body>
</html>
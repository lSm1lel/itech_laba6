<?php
	require 'connection.php';
	$count = 0;
	$name1 = $_GET['name2'];
	$person = $db->find(['manager'=>$name1],['projectName'=>1]);
	foreach ($person as $per) 
	{

	$count = $count+1;

	}
	echo $count;
?>
<script>
	 localStorage.setItem('<?php echo $name1;?>','<?php echo $count;?>' );
</script>
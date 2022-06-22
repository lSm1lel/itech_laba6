<?php
	require 'connection.php';

	$name1 = $_GET['name3'];

	$person = $db->find(['manager'=>$name1],['workers'=>1,'_id'=>0]);
	$result;
	foreach ($person as $per) 
	{
		print_r($per['workers']);
		$name1 = $per['workers'];
	echo "<br>";
	}
?>
	<script>
		localStorage.setItem('<?php echo $name1;?>','<?php echo $result;?>' );
	</script>
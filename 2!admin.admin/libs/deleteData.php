<?php

	if(isset($_GET['delete']))
	{
		include_once( 'core/class.ManageDatabase.php' );
		$init = new ManageDatabase;
		$id = $_GET['id'];
		$delete = $init->deleteData($session_table_name,$id);

		if($delete == 1)
		{

			$output = '
			<script>
			window.location.href = "http://127.0.0.1/softwenbak/2!admin.admin/tables.php";
			alert("success!");

			</script>
			';


		}
		else
		{
			$output = '
				<script>
				window.location.href = "http://127.0.0.1/softwenbak/2!admin.admin/tables.php";
				alert("success!");
				</script>

			';

		}
		echo $output;
	}
?>

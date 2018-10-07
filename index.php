<head>
	<meta charset="UTF-8">
</head>
<?
	include 'config.php';
	
	$sql = "SELECT * FROM image_table ORDER BY rating DESC";
	$res = mysqli_query($cn,$sql);
	
	echo '<table border="1" width="100%" height="100%">
	<tr>
		<td colspan = "3" height="50px">header</td>
	</tr>';
	
	$cRowElem = 0;
	
	while($data = mysqli_fetch_assoc($res)){
		if ($cRowElem == 0)
			echo '<tr>';
		
		echo '
			<td align="center"><a href="fullscreenimg.php/?id=' . $data[id] . '">
				<img src="' . $data[path_small] . '" alt="img">
			</a></td>
			'
		;
		$cRowElem++;
		if ($cRowElem == 3) {
			echo '</tr>';
			$cRowElem = 0;
		}
	}

	echo '<tr>
		<td colspan ="3" height="150px">footer</td>
	</tr>
	</table>';
?>

	
	
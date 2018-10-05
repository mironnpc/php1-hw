<?
	$arrImg = array_diff(scandir("small-img"), array('..', '.'));
	$cTableRows =ceil(count($arrImg)/3);
	$cRowElem = 0;
	/*$arrImg = glob("small-img/{*.png,*.jpeg,*.jpg,*.gif}", GLOB_BRACE);*/
	echo '<table border="1" width="100%" height="100%">
	<tr>
		<td colspan = "3" height="50px">header</td>
	</tr>';
	foreach ($arrImg as $value) {
		if ($cRowElem == 0)
			echo '<tr>';
		
		echo '
			<td align="center"><a href="big-img/' . $value . '" target="_blank">
				<img src="small-img/' . $value . '" alt="img">
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

	
	
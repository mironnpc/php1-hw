<?
	include "config.php";
	
	$sql = "SELECT * FROM image_table WHERE id = " . $_GET["id"] . " ORDER BY rating DESC";
	$res = mysqli_query($cn,$sql);
	$row = mysqli_fetch_assoc($res);
	$upd = "UPDATE " . $db . ".`image_table` SET `rating` = '" . ++$row["rating"] . "' WHERE (`id` = '" . $row["id"] . "')";
	$res = mysqli_query($cn,$upd);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
	<body>
		<a href="/index.php">Вернуться на главную</a>
		<div style="width: 80%; border-size: 2px;"> 
			<img src="/<?=$row[path_big];?>" alt="img" style="max-width: 100%;">
		</div>
		<p>Просмотров: <?=$row[rating];?></p>
	</body>
</html>
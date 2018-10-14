<?php
mb_internal_encoding("UTF-8");
$temp_product = file_get_contents('product.tpl');
include "config.php";
    
/*echo $temp_product;*/

    $cRowElem = 0;

    $sql = "SELECT * FROM catalog.t_catalog WHERE id = " . $_GET["id"];
    $res = mysqli_query($cn,$sql);
	
	while($data = mysqli_fetch_assoc($res)){
		$content = '
        <div class="d_img" style="background-image: url(' . $data["img"] . ')"></div>
        <div class="d_title"><h2>Название: ' . $data["title"] . '</h2></div>
        <div class="d_descr"><h3>Описание: ' . $data["descr"] . '</h3></div>
        <div class="d_price"><h2>Цена: ' . $data["price"] . '</h2></div>
        <a href="#">Купить</a>
        ';
	}
    
    echo preg_replace('/{content}/',$content,$temp_product);

?>
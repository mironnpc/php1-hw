<?php
mb_internal_encoding("UTF-8");
$temp_catalog = file_get_contents('catalog.tpl');
include "config.php";
include "func.php";
    
    $cRowElem = 0;

    $sql = "SELECT * FROM catalog.t_catalog";
    $res = mysqli_query($cn,$sql);

    $menu = '<li><a href="/basket.php">Корзина(' . count($_COOKIE["goods"]) . ')</a></li><li><a href="/reviews.php">Отзывы</a></li><li><a href="/index.php">Каталог</a></li>';
	
	while($data = mysqli_fetch_assoc($res)){
		if ($cRowElem == 0)
            $content = $content . '<tr>';
            
		$content = $content . '
			<td align="center">
                <section>
                    <div class="d_name">
                        ' . $data["title"] . '
                    </div>
                    <div class="d_img" style="background-image: url(' . $data["img"] . ');">
                    </div>
                    <div class="d_buy">
                        <a href="product.php?id=' . $data["id"] . '">
                            Купить
                        </a>
                    </div>
               </section>
            </td>';
        
		$cRowElem++;
		if ($cRowElem == 3) {
			$content = $content . '</tr>';
			$cRowElem = 0;
		}
	}
    
    //echo preg_replace('/{content}/',$content,$temp_catalog);

    $patterns = array( '/{menu}/', '/{content}/' );
    $replace = array( $menu, $content );
    echo preg_replace( $patterns, $replace, $temp_catalog );

?>
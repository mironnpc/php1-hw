<?php
    mb_internal_encoding("UTF-8");
    $temp_basket = file_get_contents('basket.tpl');
    include "config.php";
    include "func.php";

    if (isset($_GET["addGoods"])) {
        addGoods($_GET["addGoods"]);
        header("Location: http://hw6-catalog/index.php");
    } else if (isset($_GET["delGoods"])) {
        delGoods($_GET["delGoods"]);
        header("Location: http://hw6-catalog/basket.php");
    } else {
        $menu = '<li><a href="/basket.php">Корзина(' . count($_COOKIE["goods"]) . ')</a></li><li><a href="/reviews.php">Отзывы</a></li><li><a href="/index.php">Каталог</a></li>';
        
        if (isset($_COOKIE['goods'])) {
            foreach ($_COOKIE['goods'] as $name => $value) {
                $goodsid = implode(",", $_COOKIE['goods']);   
            }
        } else {
            $content = "<h1>Корзина пуста</h1>";
        }
        
        $sql = "SELECT * FROM catalog.t_catalog WHERE id IN (" . $goodsid . ")";
        $res = mysqli_query($cn,$sql);
        
        if ($res) {
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
                            <div class="d_del">
                                <a href="basket.php?delGoods=' . $data["id"] . '">
                                    Удалить
                                </a>
                            </div>
                       </section>
                    </td>';
            }
        }
  
    $patterns = array( '/{menu}/', '/{content}/' );
    $replace = array( $menu, $content );
    echo preg_replace( $patterns, $replace, $temp_basket );
    }
?>
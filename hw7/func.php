<? 
function addGoods ($goodid) {
    setcookie("goods[" . $goodid . "]", $goodid);
    return count($_COOKIE["goods"]);
}

function delGoods ($goodid) {
    setcookie("goods[" . $goodid . "]", "", -1);
    return count($_COOKIE["goods"]);
}

?>
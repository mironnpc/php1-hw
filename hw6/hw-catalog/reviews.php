<?php
    $temp_reviews = file_get_contents('reviews.tpl');
    include "config.php";

    if (!empty($_POST['V_NAME']) && !empty($_POST['V_DESC'])) {
        $sql = "INSERT INTO catalog.t_reviews (name, date_review, descr) VALUES ('" . $_POST['V_NAME'] . "', now(), '" . $_POST['V_DESC'] . "')";
        $res = mysqli_query($cn,$sql);
    }

    $sql = "SELECT * FROM catalog.t_reviews ORDER BY date_review DESC";
    $res = mysqli_query($cn,$sql);
	
	while($data = mysqli_fetch_assoc($res)){
		$content = $content . 
        '<tr>
            <td>
                ' . $data[date_review] . '
            </td>
            <td>
                ' . $data[name] . '
            </td>
            <td>
                ' . $data[descr] . '
            </td>
        <tr>';
    }
    echo preg_replace('/{content}/',$content,$temp_reviews);

   unset($_POST);
?>
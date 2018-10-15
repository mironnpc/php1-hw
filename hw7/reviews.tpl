<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
    <style>
        body {margin: 0 auto;}
        .content {
            width: 800px;
            padding: 10px;
            margin: auto; 
           clear: both;
        }
        .control {margin: 10px;}
        textarea {width: 600px;}
        input {width: 200px;}
        form {margin:0 auto;}
        table {width: 800px; border: 2px solid black;}
        tr {border: 1px solid black;}
        td {border: 1px solid black;}
        ul {margin-right: 150px}
        ul li {
            display: inline;
            margin-right: 5px; 
            float: right;
            }
    </style>
</head>
<body>
    <ul>{menu}</ul>
    <div class="content">
    <form action="reviews.php" method="POST">
        <p> Введите имя</p>
        <input class="control" type="text" name="V_NAME" required><br>
        <p> Напишите отзыв(макс 2000 символов)</p>
        <textarea class="control" name="V_DESC" id="" cols="30" rows="10" maxlength="2000" required></textarea><br>
        <input class="control" type="submit" name="Отправить">
    </form>
    <div style="margin-top: 50px;"></div>
    <table style="">
      {content}
    </table>        
    </div>
</body>
</html>
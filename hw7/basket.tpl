<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <style>
        body {margin: 0 auto;}
        .d_name {width: 300px; text-align: center; margin-bottom: 10px}
        .d_img {width: 300px; height: 300px;}
        .d_del a {width: 300px; background-color: grey; text-align: center; display: block; margin-top: 10px}
        table {width: 1020px;
            padding: 10px;
            margin: auto;
            clear: both;}
        section {margin: 10px;}
        ul {margin-right: 150px}
        ul li {
            display: inline;
            margin-right: 5px; 
            float: right;
            }
    </style>
</head>
<body>
    <ul>
        {menu}
    </ul>
    <table style="">
        {content}
    </table>
</body>
</html>
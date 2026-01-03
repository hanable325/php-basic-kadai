<!DOCTYPE>
<htnl lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $vegetable_dates = [
            '名前' =>'玉ねぎ',
            '値段' =>200,
            '産地' =>'北海道',
        ];

        foreach ($vegetable_dates as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
 </body>
</html>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way ($array,$order){
           // 昇順（TRUE）
            if ($order === TRUE){
                sort($array);
                echo "昇順にソートします<br>";
            } else {
                rsort($array);
                echo "降順にソートします<br>";
            }
            // ← ソートが終わったあとに結果を表示する
            foreach ($array as $num) {
                echo $num . "<br>";
            }
        }   
            

           // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        sort_2way($nums,TRUE);
        echo "<br>";
        sort_2way($nums,FALSE);
        ?>
    </p>
</body>

</html>
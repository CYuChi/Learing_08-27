<h3>成績等第判別</h3>
<?php

    $scores = array(90 , 0 , 5 , 95);
    $total = array_sum($scores);
    $score_avg = $total / 4 ;
    echo "總分 : ". $total . "分<br>";
    echo "平均 : ". $score_avg . "分<br>";
    echo"<br>";
    if($score_avg>90){
        echo "A";
    }
    else if($score_avg>=80){
        echo "B";
    }
    else if($score_avg>=70){
        echo "C";
    }
    else if($score_avg>=60){
        echo "D";
    }
    else{
        echo "E";
    }
?>
<?php
    $names = array("袋鼠" , "巫胖" , "寶貝" , "阿奇");
    $height = array(1.72 , 1.8 , 1.63 , 1.78);
    $weight = array(70 , 130 , 55 , 85);

    for($i = 0 ; $i < count($names) ; $i++)
    {
        echo "<table width= 600 >";
        echo "<tr>";

        echo "<td>" . $names[$i] . "</td>";
        echo "<td>體重:" . $weight[$i] . "公斤</td>";
        echo "<td>身高:" . $height[$i]*100 . "公分</td>";
        $bmi[$i] = $weight[$i] / $height[$i] **2 ;
        echo "<td>BMI: " . (int)$bmi[$i] . "</td>";
        if($bmi[$i]>24 )
            echo "<td>體重過重</td>";
        else if( $bmi[$i]>18)
            echo "<td>正常範圍</td>";
        else
            echo "<td>太瘦了</td>";

        echo "</tr>";

        echo "<br>";
        echo "<hr>";
    }

   
?>
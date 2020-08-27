<?php
    echo "<table width =300>";
    echo "<tr bgcolor=#FF8888><td>i</td><td>i^2</td><td>i^3</td></tr>";
    for($i=1; $i<10; $i++){
        if($i%2)
            echo "<tr bgcolor = #ff4488>";
        else
            echo "<tr bgcolor = #ff8822>";
        echo "<td> $i </td><td>".$i**2 ."</td><td>".$i**3 ."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
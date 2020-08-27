<h3>利息試算程式</h3>
<hr>

<form method="POST" action="EX05.php">
本金: <input type="text" size=10 name="money">元<br>
利率: <input type="text" size=10 name="rate">%<br>
年數: <input type="text" size=10 name="years">年<br>
<input type="submit" value="計算">


</form>

<?php

    $money = $_POST["money"];
    $rate  = $_POST["rate"] / 100;
    $years = $_POST["years"];
    
    echo "<table border=1 width=300>";
    echo "<tr>";
    echo "<td>本金: </td><td>" . $money . "元</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>利率: </td><td>" .  $rate *100 . "%</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>年數: </td><td>" . $years . "年</td>";
    echo "</tr>";

    $amount_single = $money * (1+ $rate * $years);
    $amount_plural = $money * (1+ $rate ) ** $years;
    echo "<tr>";
    echo "<td>單利之本利和 = </td><td>" . $amount_single . "元</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>複利之本利和 = </td><td>" . (int)$amount_plural . "元</td>";
    echo "</tr>";
    
    

?>
<h1 align="center">你小子乘法口诀表不会背是吧</h1>
<?php
for( $i = 1; $i < 10; $i++ ){
    echo "<table border=1
    cellpadding=0
    cellspacing=0
    bordercolor=#CCEEEE
    bgcolor=#CCCCCC";

    echo "<tr>";
    for ( $j = 1; $j <= $i; $j++ ){
        echo "<td width=60
        align=center>";

        echo"$j*$i=".$i*$j;
        echo "</td>";
    }
    
    echo "</tr>";
    echo "</table>";
}
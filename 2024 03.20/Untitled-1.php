<?PHP
// $score=95;
// if ($score>=90){
//     echo"优秀";
// }
// elseif ($score>= 80){
//     echo "良好";
//     }
// elseif ($score>= 70){
//     echo "中等";
// }
// elseif ($score>= 60){
//     echo "及格";
//     }
// else{
//     echo "不及格";
// }

// 用switch语句实现上述程序
$score=95;
$shi=(int)($score/10);
switch($shi){
    case 9:
        echo"优秀";
        break;
    
    case 8:
        echo"良好";
        break;
        
    case 7:
        echo"及格";
        break;
        
        case 6:
            echo"不及格";
            break;
}
?>
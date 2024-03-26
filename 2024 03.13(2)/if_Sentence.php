<?php
// if语句
$week = "四";
if($week=="三"){
    echo"数学课";
}
elseif($week=="一") {
    echo "语文课";
    }
elseif($week== "二") {
    echo "英语课";
    }
elseif($week== "四") {
    echo "天文课";
    }
    elseif($week== "五") {
        echo "PHP";
        }

else{
    echo "滚";
    }

switch($week) {
    case "一": 
        echo "语文课";
        break;
    case "二":
        echo "英语课";
        break;
}
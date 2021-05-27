<?php
//定义一个数组
$arr = ["zhangsan","isss","shuxi","xhn","xuwe","xiaoming"];
echo '</pre>';
print_r($arr);
echo '</pre>';
echo '<hr>';


// sort();
sort($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<hr>';


// shuffle();
echo "打乱顺序";
shuffle($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<hr>';


//in_array()   判断元素是否存在于数组
// var_dump(in_array("igsss",$arr));

if(in_array("iskss",$arr)){
   echo  "可看价";
}else{
    echo "不可见";
}
echo '<hr>';



// array_reverse()  //
echo "倒序数组";
echo '<pre>';
print_r(array_reverse($arr));
echo '</pre>';
echo '<hr>';


//array_rand()   随机取出一个或多个key
$k =array_rand($arr,1);
echo $arr[$k];

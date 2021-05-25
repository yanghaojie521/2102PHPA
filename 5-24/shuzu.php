<?php
$arr1 =array(
    "name" =>"zhangsan",
    "afe" => 11,
    "sex"  =>"男",
);
echo  $arr1;
 var_dump($arr1);
 echo "\n";
 print_r($arr1);
 
 
$arr2 =[123,22,33,44,55,"dd","ddd"];
//遍历数组
foreach($arr2 as $k=>$v){
	echo '$k='.$k.'$v='.$v. "\n";  //第一次遍历 $k=0，$v=123
if($k==0){
	 die("体脂率"); //程序终止
     //continue ;//跳过本次循环
	 //exit（）; //退出
}
}
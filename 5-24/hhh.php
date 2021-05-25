<?php
// 调用 time() 函数 获取 unix时间戳
 // echo time();
  //echo "\n";
  //显示当前文件的绝对路径
 // echo  __FILE__;
 // echo"\n";
  //显示当前的行号
  //echo  __LINE__;

//function add ($add1,$add2){
   //return $add1+$add2;
//}
//定义变量$变量名 
//$a=11;
//$b=22;
//$c =add($a,$b);
//字符串拼接使用.
//使用单引号字符串原样输出
//echo '$a+$b='.$c;
//echo "\n";
//使用双引号字符串解析变量
//echo "$a+$b=$c";

/*$f=false;
$a="helll";
if($f){
	echo "真";
}else{
	echo "家";
}*/
// .当前目录
// ..上个目录
/*
 *常用的字符串里面的常用函数
 //substr()截取字符串 里面至少有两个参数
  md5 哈希算法  计算字符串MD5时 返回32位16进制
全部 trim 左ltrim 右rtrim  空格
ucfirst第一位  ucwords每个单词大写  strtoupper 全部   小写 strtolower
str_shuffle   //打乱字符串
str_split     //将字符串传数组
strlen  获取长度
strpos   查找首次出现的位置
strrev  // 反转字符串
*/
$www ="     dddss sss sss ";
$hhh ="iiikkddll";
$jjj="喜欢你跟我走";
//echo md5($www); md5
//echo substr($hhh,2,4); 截取字符串
/*echo trim($www);清除两边空格
echo "\n";
echo ltrim($www); 左清除空格
echo "\n";
echo rtrim($www); 右清除空格*/  

//echo strlen($hhh);  获取字符串长度
//echo str_shuffle($www);  打乱字符串
//echo strrev($hhh); 字符串反转
//echo strpos($hhh);
//echo  str_split ($jjj);
echo ucfirst($hhh);
echo "\n";
echo ucwords($hhh);
echo "\n";
echo strtolower($hhh);
//ucfirst第一位  ucwords每个单词大写  strtoupper 全部   小写 strtolower
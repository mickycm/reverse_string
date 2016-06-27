<?php
//快速排序算法 例子
$mem = memory_get_usage();
//要排序的数组
function QuickSort(&$arr = []){
   $len = count($arr);
   if($len <=1) return $arr;
   $pivot  = $arr[0];   //选第一个作基准元素
   $leftArr = [];
   $rightArr = [];  
   for($i = 1; $i < $len; $i++){   //第二个开始比较
      if($arr[$i] <= $pivot){
         $leftArr[]  = $arr[$i];
      }else{
          $rightArr[] =  $arr[$i];
      }
   }//end for
  $left =  QuickSort($leftArr);    //左边排序
   $right =    QuickSort($rightArr);  //右边排序
  return array_merge($left,[$pivot],$right);
}
$arr = [];
for($i=0; $i < 1000; $i ++){
   $arr[] = mt_rand(1,10000);
}
$sortArr = QuickSort($arr);
print_r($sortArr);
echo round((memory_get_usage()-$mem)/1024/2014,2) . 'M'.PHP_EOL;   //看看要多少内存

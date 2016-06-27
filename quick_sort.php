<?php
//快速排序算法 例子

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

$arr = [5,2,3,1,23,9,5,3,11,34,5,23,12,1,22,12,13,14,8,7];
$sortArr = QuickSort($arr);
print_r($sortArr);

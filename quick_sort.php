<?php
//快速排序算法 例子

//要排序的数组
function QuickSort(&$arr = []){
   $len = strlen($arr);
   if($len <=1) return $arr;
   $pivot  = $arr[$len-1];   //选最后一个作基准元素
   $leftArr = [];
   $rightArr = [];  
   for($i = 0; $i <= $len; $i++){
      if($arr[$i] < $pivot){
         $leftArr[]  = $arr[$i];
      }else{
          $rightArr[] =  $arr[$i];
      }
   }//end for
   QuickSort($leftArr);
   QuickSort($rightArr);
  
}

<?php
/**
*把最后N个字符轮流放在最字符串最前面
*@param $string  要转的字符串
*
*/
function ShiftOneToLeft(&$string){
    $len = strlen($string);
    $temp = $string[0];    //先取出第一个字符   等下换到最后面去
    for($i=1; $i<$len; $i ++){   //从第二个字符开始  循环到最后
        $string[$i-1] = $string[$i];   //把后一个字符 放前一位
    }
    $string[$len-1]  = $temp;    //第一个字符 放到最后
}

/**
* @param $string 要转的字符串
* @param $n   要转的字符个数
*
/
function ReverseString(&$string,$n){
   while($n --){
        ShiftOneToLeft($string);
   }
}

$string = 'fasdffabc';
ReverseString($string,2);
echo $string;
// output :   'sdffabcfa'

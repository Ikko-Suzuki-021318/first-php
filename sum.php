<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($a) {
  $result = 0;
  for ($i=1; $i <=$a ; $i++) {
    $result = $a *2;
  }
  return $result;
}
echo double(3).PHP_EOL;

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b) {
  $result = $a+$b;
  return $result;
}
echo f(1,9).PHP_EOL;

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
function product($arr) {
  $result = $arr[0];
  for ($i=1; $i < count($arr); $i++) {
    $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1,3,5,7,9)).PHP_EOL;

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を
//実装しようとしています。途中の部分を完成させてください。
$arr = array(7,5,8,14,3,11);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $result = 0;
 foreach((array)$arr as $a){
   if ($result < $a) {
     $result = $a;
   }
 }
return $result;
 }
 echo max_array($arr).PHP_EOL;

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
$string = '<p>ここのみ表示される<a href="/php/remmove/"<a/><P/>';
echo strip_tags($string).PHP_EOL;
//array_push
$array = array(1,2,3);
array_push($array,4);
print_r ($array);
//array_merge
$array1 = array("color" => "blue",2,4);
$array2 = array("a","b","color" => "green","shape" => "trapezoid","4");
$result = array_merge($array1,$array2);
print_r($result).PHP_EOL;
//time, mktime
date_default_timezone_set('UTC');
echo "July ,2000 is on a " . date("l",mktime(0,0,0,7,1,2000)).PHP_EOL;;
$nextWeek = time() + (7*24*60*60);
echo 'Now: '.date('Y-m-d')."\n";
echo 'Next Week:'.date('Y-m-d',$nextWeek)."\n";
//date
echo date("l");

<?php
// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
// function total($arr){
//   return $arr*$arr;
// }
//
// echo $arr(1,3,5,7,9);


function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
          // 配列の最初の要素は$resultに加える
              $result += $arr[$i];
        }else{
            // 配列の最初の要素以外は$resultに掛け合わせる
             $result *= $arr[$i];
        }
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));
?>

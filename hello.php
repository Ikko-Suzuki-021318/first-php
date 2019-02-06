<?php
$a = 3;
$b = 7;
echo $a + $b;
echo $result.PHP_EOL;
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];
echo $result.PHP_EOL;
$hello = "Hello,";
$name = "Suzuki";
$world = "'s World!";
echo $hello .$name .$world;
echo $result.PHP_EOL;
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo $result.PHP_EOL;
$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calendar["December"];
echo $result.PHP_EOL;
$name = "鈴木一行";
if ($name = "鈴木一行") {
  // code...
  echo "私は鈴木一行です。";
} else {
  echo "鈴木一行ではありません。";
}
echo $result.PHP_EOL;
$total = 1;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
  // code...
}
echo $total;
echo $result.PHP_EOL;

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple","strawberry","cherry","grape","apricot");
foreach ($fruits as $fruit) {
  // code...
  echo $fruit.PHP_EOL;
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

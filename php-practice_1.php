<?php
// Q1 変数と文字列
$name = '安藤';
echo '私の名前は' . $name . 'です';
// Q2 四則演算
$num = 5;
$num *= 4;
var_dump($num);
$num /= 2;
var_dump($num);
// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date("Y年m月d日h時i分s秒") . 'です。';
// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'mac' || $device === 'windows') {
    echo '使用のOSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}
// Q5 条件分岐-2 三項演算子
$age = 18;
$judgment = ($age < 18) ? '未成年です。' : '成人です。';
echo $judgment;
// Q6 配列
$Kantoregion = ['東京都' , '埼玉県' , '栃木県' , '千葉県' , '群馬県' , '神奈川県' , '茨城県'];
echo $Kantoregion[2] . 'と' . $Kantoregion[3] . 'は関東地方の都道府県です。';
// Q7 連想配列-1
$Kantoregion = ['東京都' => '新宿区' , '埼玉県' => 'さいたま市' , '千葉' => '千葉市' , '栃木県' => '宇都宮市' , '群馬県' => '前橋市' , '神奈川県' => '横浜市' , '茨城県' => '水戸市'];
foreach ($Kantoregion as $key => $value) {
    echo $value . "\n";
}
// Q8 連想配列-2
$Kantoregion = ['東京都' => '新宿区' , '埼玉県' => 'さいたま市' , '千葉' => '千葉市' , '栃木県' => '宇都宮市' , '群馬県' => '前橋市' , '神奈川県' => '横浜市' , '茨城県' => '水戸市'];
$key_saitama = '埼玉県';
$value_saitama = 'さいたま市';
foreach ($Kantoregion as $key => $value) {
    if ($key === $key_saitama && $value === $value_saitama) {
    echo $key . 'の県庁所在地は、' . $value . 'です。';
    }
}
// Q9 連想配列-3
$Kantoregion = ['東京都' => '新宿区' , '埼玉県' => 'さいたま市' , '千葉' => '千葉市' , '栃木県' => '宇都宮市' , '群馬県' => '前橋市' , '神奈川県' => '横浜市' , '茨城県' => '水戸市'];
$Kantoregion += ['愛知県' => '岡崎市' , '大阪府' => '大阪市'];
$key_toukai = '愛知県';
$key_kinki = '大阪府';
foreach ($Kantoregion as $key => $value) {
    if ($key !== $key_toukai && $key !== $key_kinki) {
    echo "${key}の県庁所在地は${value}です。" . "\n";
    } else {
        echo "${key}は関東地方ではありません。" . "\n";
    }
}

// Q10 関数-1
function hello($name) {
  echo $name . 'さんこんにちは。' . "\n";
}
hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price){
  $price *= 1.1;
  return $price;
}
$taxInPrice = calcTaxInPrice(1000);
echo '1000円の商品の税込価格は' . $taxInPrice . 'です。';

// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 == 0){
      echo $number . 'は偶数です。' . "\n";
  } else {
      echo $number . 'は奇数です。' . "\n";
  }
}
distinguishNum (11);
distinguishNum (24);


// Q13 関数とswitch文
function evaluateGrade($results) {
  switch ($results) {
      case 'A' :
      case 'B' :
          echo '合格です。' . "\n";
          break;
      case 'C' :
          echo '合格ですが追加課題があります。' . "\n";
          break;
      case 'D' :
          echo '不合格です。' . "\n";
          break;
      default:
          echo '判定不明です。講師に問い合わせてください。' . "\n";
          break;
  }
}
evaluateGrade ('A');
evaluateGrade ('E');

?>
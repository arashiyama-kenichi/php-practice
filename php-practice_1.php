<?php
// Q1 変数と文字列
$name = '嵐山';
// $name = '=';
echo '私の名前は' . $name . 'です。';

// 理由：結合演算子を使ってる
// 変数に格納できるモノは、データである。定義がある。データ以外は格納できない。
// データである為に、定義：①値、②データ型であること。

// Q2 四則演算
$num = 5 * 4;

echo "$num\n";
// echo "{$num}\n";
echo $num / 2;
// 特殊文字"\n":改行の特殊文字

// Q3 日付操作
$timestamp = date('Y-m-d H:i:s');

echo '現在時刻は' . $timestamp . 'です。';


// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows'  || $device === 'mac') {
    echo "使用OSは $device です";
} else {
    echo 'どちらでもありません。'; 
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$message = ($age >= 18) ? '成人です' : '未成年です';

echo $message;

// Q6 配列
$area = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '茨城県', '群馬県'];

echo $area[2] .'と'.$area[3]. 'は関東地方の都道府県です。';


// Q7 連想配列-1
$city = [
    '東京都' => '新宿区', 
    '神奈川県' => '横浜市', 
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市', 
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',  
];
foreach($city as $capital){
    echo $capital . "\n";
}

// Q8 連想配列-2
$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' =>'宇都宮市',
    '群馬県' =>'前橋市',
    '茨城県' =>'水戸市',
];
$prefectures_s = '埼玉県';
    
foreach($city as $prefectures => $capital){
    if($prefectures == $prefectures_s){
        echo $prefectures.'の県庁所在地は'.$capital.'です。';
    }
}

// Q9 連想配列-3
$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' =>'宇都宮市',
    '群馬県' =>'前橋市',
    '茨城県' =>'水戸市', 
];
$prefectures_not_in_capital = [
    '大阪府' =>'大阪市',
    '愛知県' => '名古屋市'
];
$mix=array_merge($city, $prefectures_not_in_capital);

foreach ($mix as $pref => $capital) {
    if(in_array($capital, $prefectures_not_in_capital, true)) {
        echo "${pref}は関東地区ではありません".PHP_EOL;
    }else{
        echo "${pref}の県庁所在地は${capital}です。".PHP_EOL;
    }
}

// Q10 関数-1
function sayHi($name)
{
    echo $name.'さん、こんにちは。'."\n";
}

sayHi('金谷');  
sayHi('安藤');



// Q11 関数-2
function calcTaxInPrice($price) {
    return $price*1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price .'円の商品の税込価格は'.$taxInPrice. '円です。';

// Q12 関数とif文
function distinguishNum($numbers) {
    if($numbers % 2 ==0){
        return $numbers.'は偶数です。'."\n";
    }else{
        return $numbers.'は奇数です。'."\n";
    }
}

// Q13 関数とswitch文
function evaluateGrad($evaluation) {
    
    switch($evaluation) {
        case 'A':
        case 'B':
        return '合格'."\n";
        break;
        
        case 'C':
        return '合格ですが追加課題があります。'."\n";
        break;
        
        case 'D':
        return '不合格です。'."\n";
        break;
        
        default:
        return'判定不明です。講師に問い合わせてください。'."\n";
        break;
    }
}

echo evaluateGrad ('A');
echo evaluateGrad ('G');


?>
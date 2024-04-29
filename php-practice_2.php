<?php
// Q1 tic-tac問題
for ($i=1; $i<=100; ++$i) {
    if( $i % 20 == 0){
        echo 'tic-tac' . "\n";
        continue;
    }
    elseif ( $i % 5 == 0){
        echo 'tac' . "\n";
        continue;
    }
    elseif ( $i % 4 == 0){
        echo 'tic' . "\n";
        continue;
    }
    // else( $i % 20 == 0 ){
    //     echo 'tic-tac' . "\n";
    //     continue;
    // } 
    // 多分、重なる倍数の際にエラーが起こる。重なる倍数に上書きして出力されるようにする必要がある。
    
    echo "$i" ."\n";
}

// Q2 多次元連想配列
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

oreach ($personalInfos as $info) {
    if ($info['name'] === 'Bさん') {
        echo $info['name'] . 'の電話番号は' . $info['tel'] . 'です。';
        break;
    }
}

//Q2-2
foreach ($personalInfos as $key => $info) {
    $number = $key + 1;
        
echo "{$number}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
}
// Q2-3
$ageList = [25, 30, 18];

foreach ($personalInfos as $key => &$info) {
    
$info['age'] = $ageList[$key];
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, "山田");

echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';



// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo $this->studentName . 'はPHPの授業に参加しました。出席番号：' . $this->studentId ;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 現在の日付を取得
$currentDate = new DateTime();

// 1ヶ月前の日付を計算

$oneMonthAgo = clone $currentDate;
$oneMonthAgo->modify('-1 month');

// 出力フォーマット
$outputFormat = 'Y-m-d';

// 結果を出力
echo  $oneMonthAgo->format($outputFormat);



定義済みクラス
// 現在の日付を取得
$currentDate = new DateTime();

// 比較する日付を設定 (1992年4月25日)
$specifiedDate = new DateTime('1992-04-25');

// 日付の差を計算
$dateDifference = $specifiedDate->diff($currentDate);

// 経過日数を計算
$totalDays = $dateDifference->days;

// 結果を出力
echo "あの日から{$totalDays}日経過しました。";
?>


<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
    if ($i % 20 === 0) {
        echo 'tic-tac' . "\n";
    } elseif ($i % 4 === 0) {
        echo 'tic' ."\n";
    } elseif ($i % 5 === 0) {
        echo 'tac' . "\n";
    } else echo $i . "\n";
  }
  // Q2 多次元連想配列
  echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';
  
  foreach ($personalInfos as $key => $value) {
    $key += 1;
    echo $key . '番目の' . $value['name'] . 'のメールアドレスは' . $value['mail'] . 'で電話番号は' . $value['tel'] . 'です。' . "\n";
  }
  
  foreach ($ageList as $key => $value) {
    $personalInfos [$key]['age'] = $value;
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
          echo '学籍番号' . $this -> studentId . '番の生徒は' . $this -> studentId . 'です。';
      }
  
      public function attend($id)
      {
          echo '授業に出席しました。';
      }
  }
  $yamada = new Student(120, '山田');
  // Q4 オブジェクト-2
  public function attend($subject)
  {
      echo $this -> studentName . 'は' . $subject . '授業に出席しました。' . '学籍番号:' . $this -> studentId;
  }
  // Q5 定義済みクラス
  $date = new DateTimeImmutable('2025-7-16');
  echo $date -> modify('-1 months') -> format('Y-m-d');
  
  $nawtime = new DateTime('2025-07-16');
  $pasttime = new DateTime('1992-04-25');
  $interval = $nawtime -> diff($pasttime);
  echo 'あの日から' . $interval -> format('%a') . '日経過しました。';
>>>>>>> main
?>
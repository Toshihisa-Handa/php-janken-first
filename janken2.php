<?php 

$myhand = $_POST['myhand'];//ラジオボタンの値
$yourhands = ['グー', 'チョキ', 'パー'];
$choice = array_rand($yourhands);//配列からランダムで値を取得する記述
$yourhand = $yourhands[$choice];//ランダムに手を出す


if(isset($myhand)){//issetでラジオボタンの値があったらジェンケンをするという意味になる
  if($myhand == $yourhand){
    $result = 'アイコ';
  }else if($myhand =='グー'&& $yourhand=='チョキ'){
    $result = '勝ち';
  }else if($myhand =='チョキ'&& $yourhand=='パー'){
    $result = '勝ち';
  }else if($myhand =='パー'&& $yourhand=='グー'){
    $result = '勝ち';
  }else{
    $result = '負け';
  }
}
?>


<html>
<head>
  <meta charset="UTF-8">
  <title>ジャンケン結果</title>
</head>
<body>
  <h1>結果は</h1>

<h3>私の手は<?=$myhand?></h3>

<h3>敵の手は<?=$yourhand?></h3>


<h3>判定は<?=$result?></h3>

</body>
</html>
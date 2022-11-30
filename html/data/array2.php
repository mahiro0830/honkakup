<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = [
            'name'  => '山下次郎',
            'age'   => 30,
            'place' => '有田',
        ];
        $user['job']   = '伝統工芸士'; // 職業を追加
        $user['hobby'] = 'パン作り';   // 趣味を追加
    ?>

    <p><?= $user['name']; ?></p>
    <p><?= $user['age']; ?></p>
    <p><?= $user['place']; ?></p>
    <p><?= $user['job']; ?></p>
    <p><?= $user['hobby']; ?></p>
    <p><pre><?php print_r($user); ?></pre></p>

    <?php
        // イベント参加者名簿
        $participants = [];
        $participants[0] = '小林';
        $participants[1] = '田中';
        $participants[2] = '鈴木';
        $participants['event'] = '大木町開催　ワイン大会';
        $participants['event-date'] = '2019.1.15'
    ?>

    <p><pre><?php print_r($participants); ?></pre></p>
</body>
</html>
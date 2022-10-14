<?php

// そのファイル内での関数呼び出しの際に、厳密モードでの型検査が行われるようにする
declare(strict_types=1);
// 1〜100までの数を繰り返す
for ($i = 1; $i <= 100; $i++) {
  // 3・5の両方の倍数の（15）の倍数なら
  if ($i % 15 === 0) {
      echo 'FizzBuzz';
      // 3の倍数なら
  } elseif ($i % 3 === 0) {
      echo 'Fizz';
      // 5の倍数なら
  }  elseif ($i % 5 === 0) {
      echo 'Buzz';
      // 上記以外
  }  else {
      echo $i;
  }
  // 見やすいように改行
  echo PHP_EOL;
}

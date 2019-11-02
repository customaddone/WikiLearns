<template>
  <div class="wrapper">
      <canvas  id="canvas" width="600" height="500">
      </canvas>
  </div>
</template>

<script>
// ロード時に関数drawを呼び出す
window.addEventListener('load', draw, false);

function draw(){
  var r = 50; //振幅
  var degree = 0; //角度

  // <canvas>タグで図形が描ける canvas要素を取得する
  var canvas = document.getElementById('canvas');
  // getContextの引数は'2d'のみ
  var ctx = canvas.getContext('2d');

　// 永久ループです
  function loop() {

    // 0〜width, 0~heightの領域（全領域）の描画を消す
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    // 現在のパスをリセットして新しい直線を描画できるようにする
    ctx.beginPath();　
    ctx.strokeStyle = '#61abf4';　//線の色
    ctx.lineWidth = 2;　// 線の太さ

    // drawWaveで描画
    drawWave(degree, 720);

    // 角度 90度プラス　周期を上のとずらす
    ctx.beginPath();　
    drawWave(degree + 90, 630);

    degree += 3; //3度づつ増やしていく

    // 描画処理を繰り返し実行する setTimeoutと違ってタイミングはブラウザ任せ
    requestAnimationFrame(loop);
  }

  loop();

  // 第１引数は角度、第２引数は周期
  function drawWave(degree, cycle) {

    //  x座標0,y座標 (-振れ幅 * ラジアン換算での角度((Math.PI/cycle)*degree)のsinの値)
    //  + heightの値の1/2
    ctx.moveTo(0, -r*Math.sin((Math.PI/cycle)*degree)+(canvas.height/2)); //始点
    for (var x=1; x <= canvas.width; x+= 1) {
      // 上記の作業を１度刻みで行い、y座標を決めていく
      var y =-r*Math.sin((Math.PI/cycle)*(degree+x));
      // y座標を決めてはパスを移動、決めてはパスを移動を繰り返し、y = sin x のグラフを描く
      ctx.lineTo(x, y+(canvas.height/2));

    }
    // drawWaveでパスを移動させた部分について線を引く
    ctx.stroke();

    ctx.fillStyle = '#61abf4';
    ctx.globalAlpha = 0.2; // 透明度
    ctx.lineTo(canvas.width, canvas.height); //パスをcanvasの右下まで
    ctx.lineTo(0, canvas.height); //パスをcanvasの左下まで
    ctx.closePath() //パスを閉じる
    ctx.fill(); //塗りつぶす
  }
}

</script>

<style>
  .wrapper {

  }
</style>

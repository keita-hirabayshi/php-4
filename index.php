<!-- 
    データの保存方法　　　　　大きく分けて３パターンある
    １　　cookieに保存　　　/仕組み　ブラウザに値を保存
    webサイト上で、cookieを認識しそれをサーバー側に送信

    ２　　session　　　　サーバーに値を保存
    3 DBに保存　　DBに値を保持

    ショートカット　command + R  再度読み込み
 -->
 <?php
 //httpsとは通信自体が暗号化されたやりとりの通信のこと


//  スーパーグローバル関数

// cookiesにはいろんなパラメーターを設定することができる 
// expire 有効期限　/path ディレクトリ　/  secure httpsリクエスト/  httponly jsからのアクセスの可否
 setcookie('VISIT_COUNT',1,[
     'expires' => time() + 60 *60 * 24 * 30,
     'path' => '/' ,  //特定のパスのみにcookieを有効にしてあげることができる
    // 'secure'   httpsプロトコル時に使用　　trueならhttpsのリクエストのみ値を取得できる（defaultはfalse）
    // 'httponly' cookieの値をjsにて処理できるか　trueにするとjsからアクセスできなくなる


    //  一致したドメインのURLに応じてcookieの値を飛ばす
    // googleなら社独自のドメインを保持していて、それがないとcookieの値は手に入らないといった具合

]);
// cookieの設定には上の関数が必要
// 第一引数　名称　　　　　　　　　第二引数　設定したい値

// cookieの値は上書きしようとしてもできないので注意
// $_COOKIE['VISIT_COUNT'] =2;


 var_dump($_COOKIE['VISIT_COUNT']);
//  cookieはheadersに格納されており、webサイト毎に設定される
// データ保持の観点から、cookieはドメイン毎に独立していて、見れないようになってる

// phpにてアクセスできる背景
// cookieはリクエストのたびにheader内に値を保持するから
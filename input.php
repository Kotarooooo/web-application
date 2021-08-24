<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Header Sample</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1 class="title">ヘッダー</h1>
    <nav class="nav">
      <ul class="menu-group">
        <li class="menu-item"><a href="#">項目1</a></li>
        <li class="menu-item"><a href="#">項目2</a></li>
        <li class="menu-item"><a href="#">項目3</a></li>
        <li class="menu-item"><a href="#">項目4</a></li>
        <li class="menu-item"><a href="#">項目5</a></li>
      </ul>
    </nav>
  </header>
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="contact.js"></script>
</head>
<body>
<div><h1>株式会社浩太郎</h1></div>
<div><h2>お問い合わせ</h2></div>
<div><h2>下記に内容を入力してください</h2></div>
<div>
    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
        <h1 class="contact-title">お問い合わせ 内容入力</h1>
        <p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
        <div>
            <div>
                <label>お名前<span>必須</span></label>
                <input type="text" name="name" placeholder="例）山田太郎" value="">
            </div>
            <div>
                <label>ふりがな<span>必須</span></label>
                <input type="text" name="furigana" placeholder="例）やまだたろう" value="">
            </div>
            <div>
                <label>メールアドレス<span>必須</span></label>
                <input type="text" name="email" placeholder="例）guest@example.com" value="">
            </div>
            <div>
                <label>電話番号<span>必須</span></label>
                <input type="text" name="tel" placeholder="例）0000000000" value="">
            </div>
            <div>
                <label>性別<span>必須</span></label>
                <input type="radio" name="sex" value="男性" checked> 男性
                <input type="radio" name="sex" value="女性"> 女性
                <input type="radio" name="other" value="その他"> その他
                
            </div>
            <div>
                <label>お問い合わせ項目<span>必須</span></label>
                <select name="item">
                    <option value="">お問い合わせ項目を選択してください</option>
                    <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                    <option value="ご意見・ご感想">ご意見・ご感想</option>
                    <option value="complain">ご不満</option>
                    <option value="other">その他</option>
                </select>
            </div>
            <div>
                <label>お問い合わせ内容<span>必須</span></label>
                <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
            </div>
        </div>
        <button type="submit">確認画面へ</button>
    </form>
</div>
</body>
</html>
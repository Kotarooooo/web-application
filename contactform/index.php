<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="contact.js"></script>
</head>
<body>
<!-- <div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div> -->
<div>
    <form action="compleate.php" method="post" name="form" onsubmit="return validate()">
        <h1 class="contact-title"><font size="5">お問い合わせフォーム</font></h1>
        <p>以下のフォームからお問い合わせください。</p>
        <div>
            <div>
                <label>タイトル<span>(必須)</span></label>
                <input type="text" name="title" placeholder="タイトル" value="" >
            </div>
            <div>
                <label>Email<span>(必須)</span></label>
                <input type="text" name="email" placeholder="Email アドレス" value="">
            </div>
            <!-- <div>
                <label>メールアドレス<span>必須</span></label>
                <input type="text" name="email" placeholder="例）guest@example.com" value="">
            </div> -->
            <!-- <div>
                <label>電話番号<span>必須</span></label>
                <input type="text" name="tel" placeholder="例）0000000000" value="">
            </div> -->
            <!-- <div>
                <label>性別<span>必須</span></label>
                <input type="radio" name="sex" value="男性" checked> 男性
                <input type="radio" name="sex" value="女性"> 女性
            </div> -->
            <!-- <div>
                <label>お問い合わせ項目<span>必須</span></label>
                <select name="item">
                    <option value="">お問い合わせ項目を選択してください</option>
                    <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                    <option value="ご意見・ご感想">ご意見・ご感想</option>
                </select>
            </div>
            <div> -->
            <div>    
            <label>お問い合わせ内容<span>(必須)</span></label>
                <textarea name="content" rows="3" placeholder="お問い合わせ内容(1000文字まで)をお書きください"></textarea>
            </div>
        </div>
        <button type="submit">送信</button>
    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   <link rel="stylesheet" href="css/register.css">
</head>
 
<body>
        <header>
            header<br>
        </header>
        <div class="flexbox-container">
            <aside>
                    aside<br>
            </aside>
            <main>
                 <div class="contact-form__content">
      <div class="contact-form__heading">

      <h1>PiGly</h1>
        <h3>新規会員登録</h3>
        <div>STEP1 アカウント情報の登録</div>
      </div>

    
      <form class="form">

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="お名前を入力" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span> 
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="メールアドレスを入力" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="パスワードを入力" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>


          </div>
        </div>

    <div class="buttons">


        <div class="form__button">
          <button class="form__button-submit" type="submit">次に進む</button>
        </div>

        <div class=rog>
            <a href="">ログインはこちら</a>
        </div>
    </div>


      </form>
    </div>
            </main>
            <aside>
                aside<br>
            </aside>
        </div>
        <footer>
            footer<br>
        </footer>
    </body>
</html>
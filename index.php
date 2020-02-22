<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MirFox</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <bootstrap> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- </bootstrap> -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media.css">
</head>

<body>
  <div class="bg_opacity"></div>
    <div class="container my_form">
        <div class="fpages">
          <div class="fpage fpage1 fpage_active">
            Войти
          </div>
          <div class="fpage fpage2">
            Регистрация
          </div>
        </div>
        <div class="form_block">
          <form action="" class="login_form" role="form">
              <div class="form-group inp_cont">
                  <label for="login">Логин: </label>
                  <input type="text" id="login" class="form-control">
              </div>
              <div class="form-group inp_cont">
                <label for="pass">Пароль: </label>
                <input type="password" id="pass" class="form-control" placeholder="">
              </div>
              <button class="btn sub_btn" type="submit">Войти</button>
          </form>
          <form action="" class="reg_form right_sl" role="form">
            <div class="form-group inp_cont">
                <label for="login">Логин: </label>
                <input type="text" id="reg_login" class="form-control">
            </div>
            <div class="form-group inp_cont">
              <label for="pass">Пароль: </label>
              <input type="password" id="reg_pass" class="form-control" placeholder="">
            </div>
            <div class="form-group inp_cont">
              <label for="pass">Подтвердите пароль: </label>
              <input type="password" id="p_pass" class="form-control" placeholder="">
            </div>
              <button class="btn sub_btn" type="submit">Войти</button>
          </form>
        </div>
    </div>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>

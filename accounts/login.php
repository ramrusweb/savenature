<?
    header("ContentType: text/html; charset=utf-8");
    $title = 'Вход';
    require  '../blocks/head.php';
    require '../includes/db.php';
    ?>

<div class="container">
    <div class="row">
        <div class="col-6 col-md-6 offset-md-3 pt-md-5">
            <div class="form-auth p-md-4">
                <form action="login.php" method="post">
                    <h1 class="form-title text-center">Вход</h1>
                    <hr>
                    <label for="login" class="pt-md-2 pb-md-1">Введите логин *</label>
                    <input type="text" name="login" id="login" class="login form-control mb-md-4" placeholder="Ваш логин или email">

                    <label for="password" class="pb-md-1">Введите пароль *</label>
                    <input type="password" name="password" id="password" class="password form-control mb-md-4" placeholder="Ваш пароль">

                    <div class="text-center">
                        <button type="submit" class="mb-md-3">Войти</button>
                    </div>

                    <div class="text-center">
                        <ul>
                            <li><a href="password_reset.php">Забыли пароль?</a></li>
                            <li><a href="signup.php">Создать аккаунт</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


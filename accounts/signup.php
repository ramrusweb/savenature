<?
$title = 'Зарегистрироваться';
require  '../blocks/head.php';
require '../includes/db.php';
?>

<div class="container">
    <div class="row">

        <div class="col-md-6 offset-md-3 pt-md-5">
            <div class="form-auth p-md-4">
                <form action="signup.php" method="post">

                    <h1 class="form-title text-center">Регистрация</h1>
                    <hr>
                    <label for="login" class="pt-md-2 pb-md-1">Введите логин *</label>
                    <input type="text" name="login" id="login" class="login form-control mb-md-4" placeholder="Ваш логин или email">

                    <label for="password" class="pb-md-1">Введите пароль *</label>
                    <input type="password" name="password" id="password" class="password form-control mb-md-4" placeholder="Ваш пароль">

                    <button type="submit" class="btn-success text-center">Зарегистрироваться</button>

                        <div class="text-center">
                            <ul>
                                <li><a href="password_reset.php">Забыли пароль?</a></li>
                                <li><a href="login.php">Уже есть аккаунт?</a></li>
                            </ul>
                        </div>

                </form>
            </div>
        </div>

    </div>
</div>
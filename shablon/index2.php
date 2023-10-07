<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Log on</title>
</head>
<body>
    <div class="wrapper">
        <!-- <div class="container">
            <header class="header">
                <a href="form_team.php">dsa</a>
                <h1>Header</h1>
            </header>
            <?php if ($_COOKIE['user_name'] == ''):?>
            <div class="form_block">
                <div class="log_on">
                    <form action="log_on.php" method="post">
                        <label for="user_name">Введите имя:</label>
                        <input type="text" name="user_name" 
                            class="form-control form-style" placeholder="Имя">
                        <label for="user_name">Введите email:</label>
                        <input type="email" name="email" 
                            class="form-control form-style" placeholder="Email">
                        <label for="user_name">Введите пароль:</label>
                        <input type="password" name="password" 
                            class="form-control form-style" placeholder="Password">
                        <button type="submit" class="btn btn-success">Зарегестрироваться</button>
                    </form>
                </div>
                <div class="log_in">
                    <form action="auth.php" method="post">
                        <label for="user_name">Введите email:</label>
                        <input type="email" name="email" 
                            class="form-control form-style" placeholder="Email">
                        <label for="user_name">Введите пароль:</label>
                        <input type="password" name="password" 
                            class="form-control form-style" placeholder="Password">
                        <button type="submit" class="btn btn-success">Войти</button>
                    </form>
                </div>
            </div>
            <?php else: ?>
            <h1>Уже вошли</h1>
            <form action="exit.php" method="post">
                <button type="submit">Выход</button>
                
            </form>
            
            <?php endif; ?>

        </div> -->
        <div class="header">
            <div class="teamer">Teamer Online</div>
            <nav>
                <h1> <a href="form_people.php" style="text-decoration: none; color: black; font-size: 20px; width: 150px;">Поиск игрока</a></h1>
                <h1> <a href="form_team.php" style="text-decoration: none; color: black; font-size: 20px;">Поиск команды</a></h1>
                <h1> <a href="authfront.php" style="text-decoration: none; color: black;">Авторизация</a></h1>
                    <h1><a href="index2.php" style="text-decoration: none; color: black;">Регистрация</a></h1>
            </nav>
        </div>
        <div class="form-block">
            <form action="log_on.php" class="form">
                <input type="text" name="user_name" 
                    class="form-control form-style input" placeholder="Имя">
                
                <input type="email" name="email" 
                    class="form-control form-style input" placeholder="Email">
                
                <input type="password" name="password" 
                    class="form-control form-style input" placeholder="Password">
                <button type="submit" class="btn btn-success input">Зарегестрироваться</button>
            </form>
        </div>
    </div>
</body>
</html>
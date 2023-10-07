<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
       <link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="header">
			<div class="teamer">Teamer Online</div>
			<nav>
				<h1> <a href="form_people.php" style="text-decoration: none; color: black; font-size: 20px; width: 150px;">Поиск игрока</a></h1>
				<h1> <a href="form_team.php" style="text-decoration: none; color: black; font-size: 20px;">Поиск команды</a></h1>
				<h1> <a href="auth.php" style="text-decoration: none; color: black;">Авторизация</a></h1>
            		<h1><a href="index2.php" style="text-decoration: none; color: black;">Регистрация</a></h1>
            </nav>
		</div>
	
		<!-- Форма -->
	<div class="form-block">
            <form action="team_search.php" class="form" style="margin-top: 50px;">
            	<div class="teamer" style="margin-bottom: 20px; margin-top: 20px;">Поиск команды</div>
            	<input type="text" name="type" class="form-control form-style input" placeholder="Требуемый игрок">
            	<input type="text" name="time" class="form-control form-style input" placeholder="Время">
                <input type="text" name="map" 
                    class="form-control form-style input" placeholder="Тип игрока">
                <button type="submit" class="btn btn-success input">Зарегестрироваться</button>
            </form>
        </div>
</body>
</html>
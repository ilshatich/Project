<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RateFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="teamer">RateFlix</div>
        <nav>
            <h1> <a href="form_people.php"
                    style="text-decoration: none; color: black; font-size: 20px; width: 150px;">Поиск игрока</a></h1>
            <h1> <a href="form_team.php" style="text-decoration: none; color: black; font-size: 20px;">Поиск команды</a>
            </h1>
            <h1> <a href="authfront.php" style="text-decoration: none; color: black;">Авторизация</a></h1>
            <h1><a href="index2.php" style="text-decoration: none; color: black;">Регистрация</a></h1>
            <h1><a href="exit.php">Выход</a></h1>
        </nav>
    </div>

    <div class="buttons">
        <div><button class="btn btn-success" width="250px">Ищу игрока</button></div>
        <div><button class="btn btn-success" width="250px">Ищу команду</button></div>
    </div>

    <div class="main_block">
        <!-- Немного волшебства на php -->
        <?php
		require "libs/rb.php";

		R::setup('mysql:host=localhost;dbname=hack', 'root', '');

		if (!R::testConnection()) {
			echo "Произошла ошибка при подключении к базе данных";
			exit();
		}

		$team_read = R::findAll('team');

		foreach ($team_read as $key) {
			echo "
				<div class='example'>
		    		<div class='info'>
		    			<div class='name'>" . $key->userid . "</div>
		    			<div class='type'>" . $key->type . "</div>
		    		</div>
		    		<button class='btn btn-success mybtn' width='250px'>Пригласить</button>
		    		
		    	</div><hr class='hr'>	
				";
		}
		?>

    </div>
</body>

</html>
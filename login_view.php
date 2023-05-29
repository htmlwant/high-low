<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <title>High & Low</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo.jpg">
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="submit/css/d.css">
    <style>
        .login_{height:4vh; width:10vh; border-radius: 10px 10px 10px 10px; border:none; background-color:transparent; color:white; border:1.5px solid white;}
        .login_:hover{background-color:wheat; transition: 0.5ms; color:black;}
        </style>
</head>
<body>
    <form action="login_server.php" method="post">
        <div id="login">
            <a href="login_view.php"><h1>High & Low</h1></a>
            
            <?php if(isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>

            <div id="login_help">
            <div class="username"><input type="text" name="user_id" class="username" placeholder="아이디를 입력하세요"></div>
            <div class="password"><input type="password" name="pass1" class="password" placeholder="비밀번호를 입력하세요"></div>
        </div>
        <div id="help">
            <a href="submit/register_view.php" target="_blank"><p>지금 회원가입 하세요</p></a>
            <button type="submit" class="login_">로그인</button>
        </div>
    </div>
    </form>
</body>
</html>
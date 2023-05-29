<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/register_view.css">
</head>
<body>
    <div id="register">
        <!--form 시작 -->
        <form action="register.php" method="post">
            <div id="register_view">
                    <!-- 비밀번호 입력안할 시 erorr -->
                    <?php if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?> </p>
                    <?php } ?>
                    
                    <?php if(isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?> </p>
                    <?php } ?>
                    <!-- end -->
                <div class="id">
                    <input type="text" placeholder="아이디를 입력해주세요" name="user_id" class="user_id">
                </div>

                <div class="nick">
                    <input type="text" placeholder="사용하실 닉네임을 입력해주세요" name="user_nick" class="user_nick">
                </div>

                <div class="pass1">
                    <input type="password" placeholder="비밀번호를 입력해주세요" name="pass1" class="user_pass1">
                </div>

                <div class="pass2">
                    <input type="password" placeholder="비밀번호를 다시 입력해주세요" name="pass2" class="user_pass2">
                </div>
                <div class="pass2">
                    <input type="text" placeholder="핸드폰 번호를 입력하세요" name="phone" class="user_pass2">
                </div>
                <div class="pass2">
                    <input type="text" placeholder="계좌번호를 입력하세요" name="bank_number" class="user_pass2">
                </div>
                <div class="pass2">
                    <input type="text" placeholder="은행명을 입력하세요" name="bank" class="user_pass2">
                </div>

                <div class="submit">
                    <button class="user_submit">저장</button>
                </div>
                <div class="login_"><a href="../login_view.php">이미 회원이신가요?</a></div>
            
            </div>
            </form>
            <!--form 종료 -->
    </div>
</body>
</html>
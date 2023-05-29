<?php

include('db.php');

if(isset($_POST['user_id']) && isset($_POST['pass1']))
{
    //보안강화
    $user_id = mysqli_real_escape_string($db , $_POST['user_id']); 
    $pass1 = mysqli_real_escape_string($db , $_POST['pass1']);
    
    //에러메세지 출력
    if(empty($user_id))
    {  
        header("location:login_view.php?error=아이디를 입력해주세요.");
        exit();
    }else if(empty($pass1))
    {
        header("location:login_view.php?error=비밀번호를 입력해주세요.");
        exit();
    }
    else
    {
        // 로그인 진행 코드
        $sql ="select * from sudo where mb_id = '$user_id'";
        $result= mysqli_query($db , $sql);

        if(mysqli_num_rows($result) === 1)
        {
            //로그인 성공
            $row = mysqli_fetch_assoc($result);
            $mysql = $row['password'];

            if($pass1 ===  $mysql)
            {
                header("location:content/main.php");
                exit();
            }
            else{
                //에러
                header("location:login_view.php?error=로그인에 실패하였습니다.");
                exit();
            }
        }
        else
        {
        header("location:login_view.php?error=아이디가 잘못되었습니다.");
        exit();
        }
    }
}
else
{
    header("location:login_view.php?error=알 수 없는 오류가 발생하였습니다");
    exit();
}
?>
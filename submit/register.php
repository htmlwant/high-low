<?php

include('db.php');

if(isset($_POST['user_id']) && isset($_POST['user_nick']) && isset($_POST['pass1']) && isset($_POST['pass2']))
{
    //보안강화
    $user_id = mysqli_real_escape_string($db , $_POST['user_id']);
    $user_nick = mysqli_real_escape_string($db , $_POST['user_nick']);
    $pass1 = mysqli_real_escape_string($db , $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($db , $_POST['pass2']);
    $phone = mysqli_real_escape_string($db , $_POST['phone']);
    $bank_number = mysqli_real_escape_string($db , $_POST['bank_number']);
    $bank = mysqli_real_escape_string($db , $_POST['bank']);


    //에러메세지 출력
    if(empty($user_id))
    {  
        header("location: register_view.php?error=아이디를 입력해주세요.");
        exit(); 
    }else if(empty($user_nick))
    {
        header("location: register_view.php?error=닉네임을 입력해주세요.");
        exit(); 
    }else if(empty($pass1))
    {
        header("location: register_view.php?error=비밀번호를 입력해주세요.");
        exit(); 
    
    }else if($pass1 !== $pass2){
        header("location: register_view.php?error=비밀번호를 다시 한번 확인해주세요.");
        exit(); 
    }else if(empty($phone))
    {
        header("location: register_view.php?error=핸드폰 번호를 입력해주세요.");
        exit(); 
    }else if(empty($bank_number))
    {
        header("location: register_view.php?error=계좌번호를 입력해주세요.");
        exit(); 
    }else if(empty($bank))
    {
        header("location: register_view.php?error=은행명을 입력해주세요.");
        exit();                                                     
    }
    else
    {
        //암호화

        $sql_same = "SELECT * FROM sudo where mb_id = '$user_id' and mb_nick = '$user_nick' ";
        $order = mysqli_query($db , $sql_same);

        if(mysqli_num_rows($order) > 0)
        {
            header("location: register_view.php?error= 아이디 또는 닉네임이 중복입니다.");
            exit();
        }
        else
        {
            $sql_same = "insert into sudo(mb_id , mb_nick , password , mb_phone , mb_bank_number , mb_bank) values ('$user_id' , '$user_nick' , '$pass1' , '$phone' , '$bank_number' , '$bank')";
            $result = mysqli_query($db , $sql_same);

            if($result)
            {
                header("location: register_view.php?success= 성공적으로 가입 되었습니다.");
                exit();
            }
            else
            {
                header("location: register_view.php?error= 아이디 또는 닉네임이 중복입니다.");
                exit();
            }
        }
    }
}
else{
    header("location : register_view.php?error=알 수 없는 오류가 발생하였습니다");
    exit();
}
?>
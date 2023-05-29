<?php

$db = mysqli_connect('localhost' , 'root' , 'asd7517162' , 'register');

if(!$db){
    echo "DB접속 실패";
}else{
    echo "DB접속 성공";
}
?>
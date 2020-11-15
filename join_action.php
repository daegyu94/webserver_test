<?php
 
        $connect = mysqli_connect('127.0.0.1', 'root', 'daegyu123', 'webserver') or die("fail");
 
 
        $id=$_GET[id];
        $pw=$_GET[pw];
        $email=$_GET[email];
 
        $date = date('Y-m-d H:i:s');
 
        //입력받은 데이터를 DB에 저장
        $query = "INSERT IGNORE INTO MEMBER (id, pw, email, date, permit) VALUES ('$id', '$pw', '$email', '$date', 0)";
 
 
        $result = $connect->query($query);
 
        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>      <script>
                alert('Registration Success');
                location.replace("./login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        
                        alert("Fail...");
                </script>
<?php   }
 
        mysqli_close($connect);
?>
 

<?php
 
        session_start();
 
        $connect = mysqli_connect('dgmysql-1.ciuitd0uxvp3.ap-northeast-2.rds.amazonaws.com', 'admin', 'daegyu123', 'webserver') or die("fail"); 

        //입력 받은 id와 password
        $id=$_GET['id'];
        $pw=$_GET['pw'];
 
        //아이디가 있는지 검사
        $query = "SELECT * FROM member WHERE id='$id'";
        $result = $connect->query($query);
 
 
        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['pw']==$pw){
                        $_SESSION['userid']=$id;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("Login Success");
                                        location.replace("./index.html");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("ID or PW is invalid");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("ID or PW is invalid");
                        history.back();
                </script>
<?php
        }
 
 
?>


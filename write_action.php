<?php
                //$connect = mysqli_connect('127.0.0.1', 'root', 'daegyu123', 'webserver') or die("fail");
                $connect = mysqli_connect('dgmysql-1.ciuitd0uxvp3.ap-northeast-2.rds.amazonaws.com', 'admin', 'daegyu123', 'webserver') or die("fail");
                
                $id = $_GET[name];                      //Writer
                $pw = $_GET[pw];                        //Password
                $title = $_GET[title];                  //Title
                $content = $_GET[content];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './it_contact_2.html';                   //return URL
 
 
                $query = "insert into board (number, title, content, date, hit, id, password) 
                        values(null,'$title', '$content', '$date',0, '$id', '$pw')";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "Posting Success"?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>


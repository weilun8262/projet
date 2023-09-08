<?
    if (isset($_GET['inputEmail'])){
        $account=$_GET['inputEmail'];
    
        $mysqli =new mysqli('localhost','root','root','food',3306);
        $mysqli->set_charset('utf8');
    
        $sql ='SELECT inputEmail FROM member WHERE inputEmail=?';
        $stmt=$mysqli->prepare($sql);
        $stmt->bind_param('s',$account);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows()>0 ){
            echo '用戶名已存在';
        }else{
            echo '用戶名可用';
        }
    }
?>
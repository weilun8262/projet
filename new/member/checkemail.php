<meta charset="UTF-8" />
<?

$account = $_REQUEST["inputEmail"];
$passwd = password_hash($_REQUEST["passwd"],PASSWORD_DEFAULT);



    $mysqli =new mysqli('localhost','root','root','food',3306);
    $mysqli->set_charset('utf8');

    $sql= 'INSERT INTO member (inputEmail,passWord) VALUES (?,?)';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ss',$account,$passwd);
    if ($stmt->execute()){
        echo "註冊成功";
        header('Location: brad45.html');
    }else{
        echo "註冊失敗";
        header('Location: register.html');
    }

?>
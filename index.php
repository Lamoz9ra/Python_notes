
<html>
<head>

    <title>book by BESAEV!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
<script>
    function opWiind(url) {
        newWin=window.open(url,"wind1","width=200, height=100, resizable=no, scrollbars=no, menubar=no");

    }


</script>

    <a>Hello</a>
   <?php //БД
    $db = "gbook";
    //Хостинг
    $host = "localhost";
    //Логин и пароль пользователя
    $user = "root";
    $pass = "";
    $connect = mysql_connect($host, $user, $pass);
    mysql_select_db($db);
    mysql_query('SET NAMES UTF8');
    if($connect == true)
    {
    echo "Привет!" . "<br> ";
    }
    else
    {
    exit("Not good") ;
    }
   $res = mysql_query("SELECT * FROM `comments`") ;
   while($row = mysql_fetch_assoc($res))
   {
       echo "<div>" . "<br>" ;
       echo "ID:" . $row[id] .  "<br>" ;
       echo "YOUR LOGIN:" . $row[login] .  "<br>" ;
       echo "YOUR COMMENT: " . $row[text] . "<br> " ;
       echo "DATETIME: " . $row[Added_date] . "<br>" ;
       echo "</div>" ;
   }

   ?>
    <form method="POST" action="get.php">
        <br>
        Your name:<br /> <input type="text" name="login">
        <br />
        COMMENT:<br /> <textarea name="text"></textarea>
        <br />
        <input type="submit" name="add_com" value=" Tell me! ">
    </form>
    <form>

        <br/>
        <input type="button" value="Открыть окошечко админа " onclick="opWiind('Admin_pass.php')"
        <br/>

    </form>

    </body>
</html>


<html>
    <head>
        <title>AS17</title>
    </head>
    <body>
        <form action="" method="POST">
            Enter a number :<input type="number" name="no" id="no">
            Enter a power :<input type="number" name="po" id="po"><br>
            <input type="SUBMIT" name="SUBMIT">
        </form>
        <?php
            if(isset($_POST["SUBMIT"]))
            {
                $n=$_POST["no"];
                $p=$_POST["po"];

                $result=function($n1,$p1){return pow($n1,$p1);};
                echo "Power :".$result($n,$p);
            }
        ?>
    </body>
</html>
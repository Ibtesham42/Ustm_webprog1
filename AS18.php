<html>
    <head>
        <title>AS18</title>
    </head>
    <body>
        <form action="" method="POST">
            <br>
            <h2>CHECKING if a variable is empty or not</h2><br>
            Enter a string :<input type="text" name="s" id="s">
            <input type="SUBMIT" name="SUBMIT">
        </form>
        <?php
            if(isset($_POST["SUBMIT"]))
            {
                $s1=$_POST["s"];
                if(empty($s1))
                {
                    echo"The variable is empty.";
                }
                else
                {
                    echo"The variable is not empty.";
                    unset($s1);
                }
            }
        ?>
    </body>
</html>
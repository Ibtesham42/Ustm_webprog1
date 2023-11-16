<html>
    <head>
        <title>AS14</title>
    </head>
    <body>
        <form action="" method="POST">
            <label> Enter a number : </label>
            <input type="number" name="n1" id="n1">
            <input type="SUBMIT" name="SUBMIT">
        </form>
        <?php
            if(isset($_POST["SUBMIT"]))
            {
                $n=$_POST["n1"];
                $sq=$n*$n;
                Echo "Square of ".$n." is ".$sq;
            }
        ?>
    </body>
</html>
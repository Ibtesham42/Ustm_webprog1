<!--Write a program in php to enter a values in an array and delete the value based on the index given by the user-->
<html>
    <head><title>AS19</title></head>
        <body>
            <form action="" method="POST">
                Enter Position to Remove <input type="number" id="p" name="r">
                <input type="submit" name="submit">
            </form>
            <?php
                $a=array (23,75,11,54,35,78);
                $s=count($a);
                for($i=0;$i<$s;$i++)
                {       
                    echo $a[$i]. "\t";
                }
                if(isset($_POST["submit"]))
                {
                    $pos=$_POST["r"];
                    echo "<br>";
                    if (empty($pos))
                    { 
                        echo "<br>The position is EMPTY";
                    } 
                    else if ($pos-1<0 || $pos-1>=$s)
                    {
                    echo "<br>INVALID position";
                    }
                    else
                    {
                        echo "<br>INDEX REMOVED: ".$pos. "<br>";

                        echo "<br>VALUE REMOVED: ".$a[$pos-1]. "<br>";   
                        for ($i=$pos-1; $i<$s; $i++) 
                        {
                            $a[$i]=$a[$i+1];
                        }
                        echo "<br>THE ARRAY AFTER DELETION:\t";
                        for($i=0;$i<$s;$i++)
                        {
                            echo $a[$i]. "\t\t";
                        }
                    }
                }
            ?>
        </body>
</html>

                       

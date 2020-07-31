    <?php

        $var1 = 10;
        $var2 = 10;
        $var3 = 10;


        if (($var1 == $var2) && ($var2 == $var3)){
            echo "iguais";
        }else{
            echo "diferentes";
        }
        echo "<br/>";

        if(($var1==$var2)||($var1 == $var3)){
            echo true;
        }else{
            echo false;
        }


    ?>
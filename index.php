
    <?php
       // $n = 12;
       // $o = 017;
        
        //printf("the number is %d and %d",$n,$o,);
        printf("The binary equivalent of %d is %b\n",1212,1212);
        echo "\n";
        printf("The hexadecimal equivalent of %d is %x\n",1212,1212);
        echo "\n";
        printf("The octal equivalent of %d is %o\n",1212,1212);
        //echo "\n";
        $fname = "israt";
        $lname = "prithi";
        printf('His name is %s %s',$fname,$lname);

        $fname = "israt";
        $lname = "prithi";
        $midname = "jahan";
        printf('His name is %1$s %2$s %3$s',$fname,$midname,$lname);//argument
        echo "\n";
        //printf("The binary equivalent of %1$d is %1$b ",12);


        $n = 12.087;
        printf("%.2f",$n);
        echo "\n";

        $m = 123.76;
        $n = 34.98;
        printf("%07.2f",$m);
        echo "\n";
        printf("%07.2f",$n);
        echo "\n";


        $fname = "israt";
        $lname = "jahan";
        $output = sprintf("His name is %s %s",$fname, $lname);
        
        
        echo strtoupper($output);
        echo "\n";

        $n = 12;
        if($n % 2 == 0){
          echo("$n is an even number");
        }
        else{
          echo("$n is an odd number");
        }

        if($n>10){
          echo"$n is greater than 10";
        }
        echo "\n";
        $alam = 100;
        $rahim = 100;
        if($alam==$rahim)
        {
          echo "Alam has same amount of money as rahim";
        }
        else if($alam>$rahim)
        {
          echo "alam has more money than rahim";
        }
        else if($alam<$rahim)
        {
          echo "alam has less money than rahim";
        }
        echo "\n";
        $age = 14;
        if($age>=13 && $age<=19)
        {
          echo "This person is teenager";
        }
        else{
          echo "This person is not a teenager";
        }
        echo "\n";
        $food = "salmon";
        if("tuna"==$food || "salmon" == $food)
        {
          echo "this food has vitamin D";
        }
        else{
          echo "We do not know abot this food";
        }
        echo "\n";
        $year = 2018;
        if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
          echo "$year is a leap year";
        }
        else if($year % 4 == 0 && $year % 100 ==0){
          echo "$year is not a leap year";
        }
        else if($year % 4 == 0){
          echo "$year is a leap year";
        }
        else{
          echo "$year is not a leap year";
        }
        echo "\n";
        $condition1 = true;
        $condition2 = false;
        $condition3 = false;
        if($condition1 && $condition2 && $condition3)
        {
          echo "Hello";
        }
        elseif($condition1 && $condition2)
        {
          echo "no 1";
        }
        elseif($condition1)
        {
          echo "no 2";
        }
        else{
          echo "no 3";
        }



        

      ?>

    

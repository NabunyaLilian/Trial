<?php

#Arithmetic Operators

    $a = 42; 
    $b = 20; 
     
    $c = $a + $b; 
    echo "Addition Operation Result: $c <br/>"; 
    $c = $a - $b; 
    echo "Subtraction Operation Result: $c <br/>"; 
    $c = $a * $b; 
    echo "Multiplication Operation Result: $c <br/>"; 
    $c = $a / $b; 
    echo "Division Operation Result: $c <br/>"; 
    $c = $a % $b; 
    echo "Modulus Operation Result: $c <br/>"; 
    $c = $a++;  
    echo "Increment Operation Result: $c <br/>"; 
    $c = $a--;  
    echo "Decrement Operation Result: $c <br/>"; 

  #Comparison Operators
    $a = 42; 
    $b = 20; 
 
    if( $a == $b ){ 
       echo "TEST1 : a is equal to b<br/>"; 
    }else{ 
       echo "TEST1 : a is not equal to b<br/>"; 
        } 
 
    if( $a > $b ){ 
       echo "TEST2 : a is greater than  b<br/>"; 
    }else{ 
       echo "TEST2 : a is not greater than b<br/>"; 
    } 
    if( $a < $b ){ 
       echo "TEST3 : a is less than  b<br/>"; 
    }else{ 
       echo "TEST3 : a is not less than b<br/>"; 
    } 
    if( $a != $b ){ 
       echo "TEST4 : a is not equal to b<br/>"; 
    }else{ 
       echo "TEST4 : a is equal to b<br/>"; 
    } 
    if( $a >= $b ){ 
       echo "TEST5 : a is either greater than or equal to b<br/>"; 
    }else{ 
       echo "TEST5 : a is neither greater than nor equal to b<br/>"; 
    } 
    if( $a <= $b ){ 
       echo "TEST6 : a is either less than or equal to b<br/>"; 
    }else{ 
       echo "TEST6 : a is neither less than nor equal to b<br/>"; 
    } 

    #Logical Operators

     $a = 42;
      $b = 0; 
     
    if( $a && $b ){ 
       echo "TEST1 : Both a and b are true<br/>"; 
    }else{ 
       echo "TEST1 : Either a or b is false<br/>"; 
    } 
    if( $a and $b ){ 
       echo "TEST2 : Both a and b are true<br/>"; 
    }else{ 
       echo "TEST2 : Either a or b is false<br/>"; 
    } 
    if( $a || $b ){ 
       echo "TEST3 : Either a or b is true<br/>"; 
    }else{ 
       echo "TEST3 : Both a and b are false<br/>"; 
    } 
    if( $a or $b ){ 
       echo "TEST4 : Either a or b is true<br/>"; 
    }else{ 
       echo "TEST4 : Both a and b are false<br/>"; 
    } 
    $a = 10; 
    $b = 20; 
    if( $a ){ 
       echo "TEST5 : a is true <br/>"; 
    }else{ 
       echo "TEST5 : a  is false<br/>"; 
    } 
    if( $b ){ 
       echo "TEST6 : b is true <br/>"; 
    }else{ 
       echo "TEST6 : b  is false<br/>"; 
    } 
    if( !$a ){ 
       echo "TEST7 : a is true <br/>"; 
    }else{ 
       echo "TEST7 : a  is false<br/>"; 
         } 
    if( !$b ){ 
       echo "TEST8 : b is true <br/>"; 
    }else{ 
       echo "TEST8 : b  is false<br/>"; 
    } 


    #Assignment Operators

    $a = 42; 
    $b = 20; 
  
    $c = $a + $b;  
    echo "Addition Operation Result: $c <br/>"; 
    $c += $a;  /* c value was 42 + 20 = 62 */ 
    echo "Add AND Assignment Operation Result: $c <br/>"; 
    $c -= $a; /* c value was 42 + 20 + 42 = 104 */ 
    echo "Subtract AND Assignment Operation Result: $c <br/>"; 
    $c *= $a; /* c value was 104 - 42 = 62 */ 
    echo "Multiply AND Assignment Operation Result: $c <br/>"; 
    $c /= $a;  /* c value was 62 * 42 = 2604 */ 
    echo "Division AND Assignment Operation Result: $c <br/>"; 
    $c %= $a; /* c value was 2604/42 = 62*/ 
    echo "Modulus AND Assignment Operation Result: $c <br/>"; 


    #Conditional Operators

    $a = 10; 
    $b = 20; 
     
    /* If condition is true then assign a to result otherwise b */ 
    $result = ($a > $b ) ? $a :$b; 
    echo "TEST1 : Value of result is $result<br/>"; 
    /* If condition is true then assign a to result otherwise b */ 
    $result = ($a < $b ) ? $a :$b; 
    echo "TEST2 : Value of result is $result<br/>"; 


 ?>   
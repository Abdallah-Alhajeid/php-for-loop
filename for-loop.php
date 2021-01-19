<?php 


// ----------------------------------------------Task 1-------------------------------------------------
// 1-2-3-4-5-6-7-8-9-10 on 1 line 


// for($x=1; $x<=10; $x++)
// {
//  if($x< 10)
//  {
//  echo "$x-";
//  }
//  else
//   {
//  echo "$x";
//   }
// }


// ----------------------------------------------Task 2-------------------------------------------------
// add int between 0-30 and display total (465)



// $sum = 0;
// for($x=1; $x<=30; $x++)
// {
// $sum +=$x;
// }
// echo "The total is $sum";
//

// undo task3,4
// ----------------------------------------------Task 3 A-------------------------------------------------



// for($x=1;$x<=5;$x++)
// {
//    for ($y=1;$y<=$x;$y++)
//     {
// 	 echo "A";
// 	    if($y< $x)
// 		 {
// 		   echo "B";
// 		 }
//      }
// }



// ----------------------------------------------Task 3 B-------------------------------------------------


// for($x=1;$x<=5;$x++)
// {
//    for ($y=1;$y<=$x;$y++)
//     {
// 	 echo "1";
// 	    if($y< $x)
// 		 {
// 		   echo "2";
// 		 }
//      }
// }


// ----------------------------------------------Task 4-------------------------------------------------

// for($x=1;$x<=5;$x++)
// {
//    for ($y=1;$y<=$x;$y++)
//     {
// 	 echo "1";
// 	    if($y< $x)
// 		 {
// 		   echo "0";
// 		 }
//      }
// }

// ----------------------------------------------Task 5-------------------------------------------------
// $n = 5;
// $x = 1;
// for($i=1;$i<=$n-1;$i++)
// {
//  $x*=($i+1); 
// }
// echo "The factorial of  $n = $x"."\n";



// ----------------------------------------------Task 6-------------------------------------------------


// $num = 0;  
// $n1 = 0;  
// $n2 = 1;  
// echo "\n";  
// echo $n1.' '.$n2.' ';  
// while ($num < 10 )  
// {  
//     $n3 = $n2 + $n1;  
//     echo $n3.' ';  
//     $n1 = $n2;  
//     $n2 = $n3;  
//     $num = $num + 1;  
// }



// ----------------------------------------------Task 7-------------------------------------------------

// $text="OrangeAcademy";
// $char="c";
// $count="0";
// for($x="0"; $x< strlen($text); $x++)
//   { 
//     if(substr($text,$x,1)==$char)
//     {
//     $count=$count+1;
// 	 }
//   }
// echo $count;


// ----------------------------------------------Task 8-------------------------------------------------



// <!DOCTYPE html>
// <html>
// <body>
// <table align="left" border="1" cellpadding="3" cellspacing="0">
// <?php
// for($i=1;$i<=6;$i++)
// {
// echo "<tr>";
// for ($j=1;$j<=5;$j++)
//   {
//   echo "<td>$i * $j = ".$i*$j."</td>";
//   }
//   echo "</tr>";
//   }
// </table>
// </body>
// </html>

// ----------------------------------------------Task 9-------------------------------------------------

// <!DOCTYPE html>
//      <html> 
//      <head> 
//   <title></title>
//   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
//   </head>
//   <body> 
//    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
//    <!-- cell 270px wide (8 columns x 60px) -->
//       for($row=1;$row<=8;$row++)
// 	  {
//           echo "<tr>";
//           for($col=1;$col<=8;$col++)
// 		  {
//           $total=$row+$col;
//           if($total%2==0)
// 		  {
//           echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
//           }
// 		  else
// 		  {
//           echo "<td height=30px width=30px bgcolor=#000000></td>";
//           }
//           }
//           echo "</tr>";
//     }
//   </table>
//   </body>
//   </html>

// ----------------------------------------------Task 10-------------------------------------------------


// echo "<table border =\"1\" style='border-collapse: collapse'>";
// 	for ($row=1; $row <= 10; $row++) { 
// 		echo "<tr> \n";
// 		for ($col=1; $col <= 10; $col++) { 
// 		   $p = $col * $row;
// 		   echo "<td>$p</td> \n";
// 		   	}
// 	  	    echo "</tr>";
// 		}
// 		echo "</table>";

// ----------------------------------------------Task 11-------------------------------------------------


// for ($i = 1; $i <= 100; $i++)
// {
//   if ( $i%3 == 0 && $i%5 == 0 )
//    {
//      echo $i . " FizzBuzz"."\n" ;
//    }
//   else if ( $i%3 == 0 ) 
//    {
//      echo $i. " Fizz"."\n";
//    }
//      else if ( $i%5 == 0 ) 
//    {
//      echo $i. " Buzz"."\n";
//    }
//      else
//    {
//      echo $i."\n";
//    }
//  }

// ----------------------------------------------Task 12-------------------------------------------------


// $n = 5; 
// echo "n = " . $n . "\n";
// $count = 1;
// for ($i = $n; $i > 0; $i--) 
// {
//   for ($j = $i; $j < $n + 1; $j++) 
//    {
//      printf("%4s", $count);
//      $count++;
//    } 
//    }



// ----------------------------------------------Task 13-------------------------------------------------

// for ($row=0; $row<=7; $row++)
// {
//   for ($column=0; $column<=7; $column++)
// 	{
//         if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
//             echo "*";    
//         else  
//             echo " ";     
// 	}        
// }




// ----------------------------------------------Task 14-------------------------------------------------


// for ($row=0; $row<7; $row++)
// {
//   for ($column=0; $column<=7; $column++)
// 	{
//       if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
//             echo "*";    
//         else  
//             echo " ";     
// 	}        
// }

// ----------------------------------------------Task 15-------------------------------------------------

// for ($row=0; $row<7; $row++)
// {
//   for ($column=0; $column<=7; $column++)
// 	{
//      if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
//             echo "*";    
//         else  
//             echo " ";     
// 	}        
// }

echo "<pre>";
for ($i = 1; $i < 8; $i++) {
    for ($j = $i; $j < 8; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
$n = 8;
for ($i = 8; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
echo "</pre>";
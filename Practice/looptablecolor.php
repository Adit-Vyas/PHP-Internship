<?php

	echo "<table border=4>";

		 for($i=0;$i<1000;$i++)
		{
		 echo"<tr>";
		 
		 if($i%2==0)
		{
			echo"<td bgcolor='red'>$i </td>";
		}
		else
		{
			echo"<td bgcolor='blue'> $i </td>";
		}
		echo"</tr>";
		}
		
	echo"</table>";

?>
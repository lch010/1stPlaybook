 <?php 
 // Connects to your Database 
 mysql_connect("localhost", "root", "abc1") or die(mysql_error()); 
 mysql_select_db("webapp") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM friends") 
 or die(mysql_error()); 
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Name:</th> <td>".$info['name'] . "</td> "; 
 Print "<th>Pet:</th> <td>".$info['pet'] . " </td></tr>"; 
 } 
 Print "</table>"; 
 ?> 


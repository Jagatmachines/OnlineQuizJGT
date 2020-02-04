<? 
if($_POST["do"]=="quiz") 
{ include("db_mysql_connect.php");
$question=$_POST["question"]; 
$opt1=$_POST["opt1"];
 $opt2=$_POST["opt2"]; 
 $opt3=$_POST["opt3"]; 
 $opt4=$_POST["opt4"]; 
 $woptcode=$_POST["woptcode"]; 
 $query="select * from quiz ";
  $temp=1; 
  $result=mysql_query($query); 
  while ($row = mysql_fetch_array($result)) 
  	{
  	 $temp=$temp+1; 
  	} 
  $query="insert into quiz values($temp,$question,$opt1,$opt2,$opt3,$opt4,$woptcode)";
   $result=mysql_query($query); 
   echo "successfully Saved"; } 
   ?> 

   <form method="post" action="Quiz_Entry_Admin.php"> 
   	<table> 
   		<tr>
    		<td colspan="2" id="heading">Online Quiz Test Question Entry Module</td> 
        </tr>
        <tr>
        	<td>Enter Question here </td>
            <td><input type="text" name="question" id="gunjan-textbox"/></td>
        </tr>
        <tr>
        	<td>Enter First option</td>
            <td><input type="text" name="opt1" id="gunjan-textbox" /></td>
        </tr>
        <tr>
        	<td>Enter Second option</td>
            <td><input type="text" name="opt2" id="gunjan-textbox" /></td>
        </tr>
        <tr>
        	<td>Enter Third option</td>
            <td><input type="text" name="opt3" id="gunjan-textbox" /></td>
         </tr>
         <tr>
         	<td>Enter Fourth option</td>
            <td><input type="text" name="opt4" id="gunjan-textbox" /></td>
         </tr>
         <tr>
         	<td>Select Right Option code</td>
            <td>
            	<select name="woptcode" id="gunjan-textbox">
                	<option value="a">A</option>
                	<option value="b">B</option>
                	<option value="c">C</option>
                	<option value="d">D</option>
                </select>
             </td>

		</tr>
        <tr>
        	<td colspan="2">
            	<input type="hidden" name="do" value="quiz" />
                <input type="submit" value="SAVE QUESTION" />
            </td>
        </tr>
    </table> </form> 
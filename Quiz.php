<? include("db_mysql_connect.php"); ?>
<div id="heading">Online Quiz</div>
 <br /> 
 <form name="quiz" method="post" action="quiz.php"> 
 	
 	<? 
 	if($_POST["do"]=="finish") 
 	{
$rans=$_POST["rans"]; 
$tq=$_POST["tq"]; 
$end=$_POST["end"];
$startposition=$_POST["startposition"]; 

echo "<table cellpadding=5px align=center style=border:1px solid silver width=80% bgcolor=green>"; 
echo "<tr><td>Total Question Attempt</td><td>",$tq,"</td><tr>";
echo "<tr><td>Correct Answer</td><td>",$rans,"</td></tr>"; 
echo "<tr><td>Wrong Answer</td><td>",$tq-$rans,"</td></tr>";
echo "<tr><td>Correct Answer Percentage</td><td>",$rans/$tq*100,"%</td></tr>";
echo "<tr><td>Wrong Answer Percenntage</td><td>",($tq-$rans)/$tq*100,"%</td></tr>"; 
echo "</table><br><br>"; 

$query="select * from quiz where qid<=$end and qid>=$startposition"; 
echo "<table cellpadding=5px align=center style=border:1px solid silver>";
echo "<tr><th colspan=4 id=heading>Online Quiz TestQuestion</td></tr>"; 
$result=mysql_query($query); 
while ($row = mysql_fetch_array($result)) { 
echo "<tr><td>",$row[0],"</td><td colspan=2>",$row[1],"</td></tr><tr><td></td>"; 
echo "<td colspan=2>A. ",$row[2],"</td>"; 
echo "<td colspan=2>B. ",$row[3],"</td></tr>";
echo "<tr><td></td><td colspan=2>C. ",$row[4],"</td>";
echo "<td colspan=1>D. ",$row[5],"</td></tr>"; 
echo "<tr><td colspan=4 align=right style=color:orange>Correct option is ",strtoupper($row[6]),"</td></tr>"; 
echo "<tr><td colspan=4 align=rightstyle=color:orange><hr></td></tr>"; 
}
echo "</table>"; 
echo "<p align=right><a href=# onclick=window.print()>Print</a></p>"; 
echo "<div style=visibility:hidden;display:none>"; 
}
?> <table cellpadding="5px" width="100%" style="border:1px solid silver"> <? $start=$_POST["start"]; $s=$_POST["startposition"]; if($start==NULL) { $start=$_GET["start"]; $s=$_GET["start"]; } $useropt=$_POST["useropt"]; $qid=$_POST["qid"]; $rans=$_POST["rans"]; $name=$_POST["name"]; $totalquestion=$_POST["totalquestion"]; if($start==NULL) $query="select * from quiz where qid=1"; else { $query="select * from quiz where qid=$start"; } $result=mysql_query($query); while ($row = mysql_fetch_array($result)) { echo "<tr><td>",$row[0],"</td><td colspan=2>",$row[1],"</td></tr><tr><td></td><tdcolspan=2><input type=radio name=useropt value=a /> ",$row[2],"</td><td colspan=2><input type=radioname=useropt value=b /> ",$row[3],"</td></tr><tr><td></td><td colspan=2><input type=radioname=useropt value=c /> ",$row[4],"</td><td colspan=2><input type=radio name=useropt value=d />",$row[5],"</td></tr>"; echo "<tr ><td colspan=5 align=right><inputtype=hidden name=name value=",$name,"><input type=hidden name=start value=",$row[0]+1,"><inputtype=hidden name=qid value=",$row[0],"><input type=hidden name=startposition value=",$s,"><inputtype=submit value=Next Question><input type=hidden name=totalquestion value=",$totalquestion+1,">"; echo "</td></tr>"; } echo "<tr><td colspan=4>"; $query="select woptcode from quiz where qid=$qid"; $result=mysql_query($query); while ($row = mysql_fetch_array($result)) { if(strcmp($row[0],$useropt)==0) { echo "<input type=hidden name=rans value=",$rans+1,">"; $rans=$rans+1; } else echo "<input type=hidden name=rans value=",$rans,">"; } echo "</td></tr>"; ?>
</table> <center> <br /> <br /> </form> <form method="post" action="quiz.php"> <input type="hidden" name="do" value="finish" /> <input type="hidden" name="rans" value="<? echo $rans;?>" /> <input type="hidden" name="name" value="<? echo $name;?>" /> <input type="hidden" name="tq" value="<? echo $totalquestion;?>" /> <input type="hidden" name="end" value="<? echo $start-1;?>" /> <input type="hidden" name="startposition" value="<? echo $s;?>" /> <input type="submit" value="Finish Online Test" /> </form>
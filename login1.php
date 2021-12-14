<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
        .style2
        {
            width: 0%; font-color:"darkred"; font-family:"arial";
        }
</style>
<meta charset="utf-8">
<title>Class Interactive Dashboard</title>
<style>
table, th, td {
  border:red;
}
table {
  width: 70%;
}
</style>
</head>

<body background = "images/rainbow.jpg">

<script type="text/javascript">
function openfile(var1) {
	alert("Java Script function is being called!!");

alert(var1);
        if (var1 == 'Select document') return; 

	
window.open(var1, '_blank');


}
</script>

<table align="center">

<tr>
<td><table>
	<tr><th><p>Hey,<?php echo $_SESSION['username']; ?>!</p></th></tr>
	<tr><td><p>You are now on user dashboard page.</p></td></tr>
</table></td>
<th><center><h1 style="font-size:200%">HMRITM &nbsp; &nbsp; &nbsp; &nbsp</h1></center></th>

<td><center><img src="images/logo.jpg"> &nbsp; &nbsp; &nbsp; &nbsp</center></td>

<td><table><tr>
<td><input type="text" id="enter" name="enter" value = 'Enter Your Text'></td>




<td><center><button type="button">GO!</button></center></td>
</tr>
<tr>
<td>
<select>
	<option><center>Contact us</center></option>
	<option><center>(011) 27724114</center></option>
	<option><center>(011) 27724118</center></option> 
	<option><center>+91.8287461931</center></option>
	<option><center>+91.8287453693</center></option>	
	<option><center>+91.8527477612</center></option>	       
</select></td>
<td><center><a href="https://goo.gl/maps/Rmjvd2UgU7FKrMQ88" target="_blank">Site Map</a></center></td>
</tr></table></td>

<th><center><h3 style="font-size:200%"><a href="logout.php">Logout</a></h3></center></th>

</tr></table>

<br><hr><br>
<table align="center">
<tr>
<th><a href="game1.accdb " target="_blank">Game 1: Guess The Number </a></th>
<th><a href="quiz.html" target="_blank">Game 2: Subject Quiz</a></th>
<th><a href="https://www.chess.com/" target="_blank">Game 3: Online Chess</a></th>
</tr>
</table>
<br><hr><br>
<table align="center"><tr>

<td><table align="center"><tr>
	<th><br>Thought of the Day &nbsp; &nbsp; &nbsp; &nbsp</th>
	<td><a href="https://www.thoughtfortoday.org.uk/" target="_blank"><img src="images/thought.png" /></a><td>
</tr></table></td>

<td><table align="center"><tr>
	<th><br>Word of the day &nbsp; &nbsp; &nbsp; &nbsp</th>
	<td><center><a href="https://www.merriam-webster.com/word-of-the-day" target="_blank"><img src="images/word.png" /></a></center><td>
</tr></table></td>

<td><table align="center"><tr>
	<th><br>What's happening? &nbsp; &nbsp; &nbsp; &nbsp</th>
	<td><img src="images/brain.jpg" /><td>
</tr></table></td>

<td><table align="center"><tr>
	<th><a href="https://weather.com/en-IN/weather/today/l/28.61,77.27?par=google&temp=c" target="_blank">Weather</a></th>
	<td><img src="images/weather.jpg" /><td>
</tr></table></td>

</tr></table>

<br><hr><br>

<table bgcolor = "ffffff" width="80%" height="50%" border="10" align="center" cellpadding="10" cellspacing="10">
<tr align="center">
<td><marquee onMouseOver="this.stop();" onMouseOut="this.start(); ">
<div id="var1" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; padding-left: 0px; font-weight: bold; color: #ff0000;">
	<img src="images/full.jpg" />
	<img src="images/computer.jpg" />
	<img src="images/library.png" />
	<img src="images/reception.jpg" />
</div></marquee></td>
</tr></table>

<br><hr><br>
<table align="center"><h3 style="font-size:100%; background-color:lightskyblue; color:maroon;">
<tr>
<th class="style1">
<select name="OptionChooser"  onChange="openfile(this.value)">

 	<option>Important Notes ;&nbsp; &nbsp</option>
	<option value="/hmr/images/odd.jpg">odd</option>
	<option value= "/hmr/images/even.jpg">even</option>        
</select>
</th>


<th class="style2">      
<select name="OptionChooser"  onChange="openfile(this.value)">
    <option>Time Table</option>
    <option value="/hmr/images/odd.jpg">odd</option>
    <option value= "/hmr/images/even.jpg">even</option>        
</select>
</th>

<th class="style3"> 
<select name="OptionChooser"  onChange="openfile(this.value)">
	<option>List of Students &nbsp; &nbsp; &nbsp; &nbsp</option>
	<option value="attendance.htm">Full Students List</option>
	<option value="group1.htm">First Group</option>
	<option value="group2.htm">Second Group</option>
	<option value="/hmr/attendance.xlsx">Full Students List (Sheet)</option>
	<option value="/hmr/group1.xlsx">First Group (Sheet)</option>
	<option value="/hmr/group2.xlsx">Second Group (Sheet)</option>
</select>
</th>

<th class="style4">
<select name="Videos"  onChange="openfile(this.value)">
	<option>Access News &nbsp; &nbsp</option>
	<option value="https://www.bbc.com/news/technology">BBC News</option>
	<option value="https://www.indiatoday.in/technology/news">India Today</option>
	<option value="https://tech.hindustantimes.com/">Hindustan Times</option>
	<option value="https://www.theverge.com/tech">The Verge</option>
</select>
</th>

<th class="style5">
<select name="Articles"  onChange="openfile(this.value)">
	<option>Tech Articles &nbsp; &nbsp</option>
	<option value="hacking.html">Hacking</option>
	<option value="datascience.html">Data Science</option>
	<option value="AI.html">Artificial Intelligence</option>
</select>
</th>

<th class="style6">
<select name="Videos"  onChange="openfile(this.value)">
	<option>Subject related Videos</option>
	<option value="https://youtu.be/MtQL_ll5KhQ">Algorithm Design And Analysis</option>
	<option value="https://youtu.be/2AvgD5lcDew">Digital Communications</option>
	<option value="https://youtu.be/vsxYucdzimA">Java Programming</option>
	<option value="https://youtu.be/LC5agCAQ_n4">Communication Skills</option>
	<option value="https://youtu.be/O753uuutqH8">Software Engineering</option>
	<option value="https://youtu.be/sH241tW4kNA">Industrial Management</option>
</select>
</th>
</tr></h3></table>
<br><br>

<table align="center"><tr>
<td><center><img src="images/hmr.jpg"></center></td>
</tr></table>
</body>
</html>
<html>
<head>
<script src="jquery.min.js"></script>
<script src="tablesorter.js"></script>
<script src="jquery.table-filter.js"></script>
<!-- <style>

body {
	background: #fafafa url(http://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
} -->
<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

table {
  max-width: 960px;
  margin: 10px auto;
}

caption {
  font-size: 6em;
  font-weight: bold;
 // font-weight: 400;
  padding: 10px 0;
}

thead th {
  font-weight: 400;
  background: #7F007F;
  color: #FFF;
}

tr {
  background: #f4f7f8;
  border-bottom: 1px solid #FFF;
  margin-bottom: 5px;
}

tr:nth-child(even) {
  background: #e8eeef;
}

th, td {
  text-align: left;
  padding: 20px;
  font-weight: 300;
}

tfoot tr {
  background: none;
}

tfoot td {
  padding: 10px 2px;
  font-size: 0.8em;
  font-style: italic;
  color: #8a97a0;
}
</style>
<script>
$(function() {
jQuery("td:contains('Delivered')").css("background-color", "lightgreen");  
jQuery("td:contains('Reserved')").css("background-color", "red");  
jQuery("td:contains('Available')").css("background-color", "darkgreen");  
$("#myTable").tablesorter(); 

});
 
</script>
</head>
<body onload="$('table').addTableFilter();">
<?php
$username="root";
$password="";
$database="channel";
mysql_connect('127.0.0.1',$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM yourtable";$result=mysql_query($query);
$num=mysql_numrows($result);mysql_close();?>
<table border="0" cellspacing="2" cellpadding="2">
<caption>Telentia</caption>
<thead>
<tr>
<th>Prefix </th>
<th>Status </th>
<th>Whmcs Dedicated IP</th>
<th>Whmcs Hostname</th>
<th>Whmcs Product</th>
<th>Ping</th>
<th>Broker </th>
<th>RSLocation </th>
<th>SWIPLocation </th>
<th>ASN </th>
<th>Customer </th>
<th>ServerIP </th>
<th>Password </th>
<th>DeliveryDate </th>
<th>Notes </th>
<th>IP </th>
<th>NotUsed </th>
<th>Blocks </th>
<th>Count </th>
<th>IPMIIP </th>
</thead>
<!--
<td>
<font face="Arial, Helvetica, sans-serif">Status</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Broker</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value3</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value4</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value5</font>
</td>
-->
</tr>
<?php
$i=0;
while ($i < $num) {
$f1=mysql_result($result,$i,"Prefix"); 
$f2=mysql_result($result,$i,"Status"); 
$w=mysql_result($result,$i,"Whmcs"); 
$f3=mysql_result($result,$i,"Broker"); 
$f4=mysql_result($result,$i,"RSLocation"); 
$f5=mysql_result($result,$i,"SWIPLocation"); 
$f6=mysql_result($result,$i,"ASN"); 
$f7=mysql_result($result,$i,"Customer"); 
$f8=mysql_result($result,$i,"ServerIP"); 
$f9=mysql_result($result,$i,"Password"); 
$f10=mysql_result($result,$i,"DeliveryDate"); 
$f11=mysql_result($result,$i,"Notes"); 
$f12=mysql_result($result,$i,"IP"); 
$f13=mysql_result($result,$i,"NotUsed"); 
$f14=mysql_result($result,$i,"Blocks"); 
$f15=mysql_result($result,$i,"Count"); 
$f16=mysql_result($result,$i,"IPMIIP"); 
$ping=mysql_result($result,$i,"Ping"); 
$id=mysql_result($result,$i,"ID"); 
$product=mysql_result($result,$i,"Product"); 
$domain=mysql_result($result,$i,"Domain"); 

#$f1=mysql_result($result,$i,"Status");
#$f2=mysql_result($result,$i,"Broker");
#$f3=mysql_result($result,$i,"");
#$f4=mysql_result($result,$i);
#$f5=mysql_result($result,$i);
#$f6=mysql_result($result,$i);
?>
<tr>
<td>
<font class='<?php echo $id.'Prefix'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
</td>
<td>
<font class='<?php echo $id.'Status'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>
<td>
<font class='<?php echo $id.'Whmcs'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $w; ?></font>
</td>
<td>
<font class='<?php echo $id.'Product'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $domain; ?></font>
</td>
<td>
<font class='<?php echo $id.'Domain'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $product; ?></font>
</td>





<td>
<font class='<?php echo $id.'Ping'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $ping; ?></font>
</td>

<td>
<font class='<?php echo $id.'Broker'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
</td>
<td>
<font class='<?php echo $id.'RSLocation'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
</td>
<td>
<font class='<?php echo $id.'SWIPLocation'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
</td>
<td>
<font class='<?php echo $id.'ASN'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font>
</td>
<td>
<font class='<?php echo $id.'Customer'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font>
</td>
<td>
<font class='<?php echo $id.'ServerIP'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font>
</td>
<td>
<font class='<?php echo $id.'Password'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f9; ?></font>
</td>
<td>
<font class='<?php echo $id.'DeliveryDate'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f10; ?></font>
</td>
<td>
<font class='<?php echo $id.'Notes'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f11; ?></font>
</td>
<td>
<font class='<?php echo $id.'IP'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f12; ?></font>
</td>
<td>
<font class='<?php echo $id.'NotUsed'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f13; ?></font>
</td>
<td>
<font class='<?php echo $id.'Blocks'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f14; ?></font>
</td>
<td>
<font class='<?php echo $id.'Count'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f15; ?></font>
</td>
<td>
<font class='<?php echo $id.'IPMIIP'; ?>' face="Arial, Helvetica, sans-serif"><?php echo $f16; ?></font>
</td>



</tr>
<?php
$i++;
}?>
</body>
</html>

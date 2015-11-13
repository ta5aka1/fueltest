<html>
<head>
<title>result</title>
</head>
<body>
<table border='1'>
<tr><th>id</th><th>name</th></tr>
<?php 
foreach($data as $item) {
    echo "<tr><td>" . $item['id'] . "</td><td>". $item['name'] . "</td></tr>";
}
?>
</table>
<?php  ?><br />
<a href='insdb.php'>Back</a>
</body>
</html>
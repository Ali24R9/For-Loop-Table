<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced (foreach)</title>
	<style>
		table{
			border:black;
			font-style:sans-serif;
		}
		tr{
			background:#66FF33;
		}
		.black{
			background-color: black;
			color:white;
			border-color:#66FF33;
		}
	</style>
</head>
<h1>foreach loop</h1>
<body>
<?php
$users = array( 
   array('first_name' => 'Michael', 'last_name' => ' Choi '),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Ali', 'last_name' => 'A'), 
   array('first_name' => 'Danny', 'last_name' => 'Dan'),
   array('first_name' => 'John', 'last_name' => 'Jack'),
   array('first_name' => 'Kobe', 'last_name' => 'Bryant'), 
   array('first_name' => 'Pau', 'last_name' => 'Gasol'),
   array('first_name' => 'Magic', 'last_name' => 'Johnson'), 
   array('first_name' => 'Peyton', 'last_name' => 'Manning'), 
   array('first_name' => 'Russell', 'last_name' => 'Wilson'),
   array('first_name' => 'Adam', 'last_name' => 'Schefter'), 
   array('first_name' => 'James', 'last_name' => 'Jack'),
   array('first_name' => 'Derek', 'last_name' => 'Fisher'),

);

?>
<table border=1>
	<thead>
		<tr>
			<th>User</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name CAPS</th>
			<th>FN Length</th>
		</tr>
	</thead>
	<tbody>
<?php

function table($array)
{
		$i= 1;
		$table = "";
	foreach($array as $user)
	{
				$class="";
				$fullname= trim($user['first_name']). " ". trim($user['last_name']);
			if($i%5==0)
			{
				$class= "class='black'";
			}
			$table .= "<tr {$class}>";
			$table .= "<td>".$i++."</td>";
			$table .= "<td>".$user['first_name']."</td>";
			$table .="<td>".$user['last_name']."</td>";
			$table .="<td>".$fullname."</td>";
			$table .="<td>".strtoupper($fullname)."</td>";
			$table .="<td>".strlen($fullname)."</td>";
			$table .="</tr>";
		}
	return $table;
}
echo table($users)
?>
	</tbody>
</table>
</body>
</html>

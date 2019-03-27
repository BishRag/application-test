<!DOCTYPE html>
<html lang="en">

<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>
	
<head>
	<meta charset="UTF-8">
	<title>DMS Application Test</title>
	
	<style>
		body {font: normal 14px/1.5 sans-serif;}
	</style>
	
	<script>
		function personAlert(index) {
			var people = <?php echo json_encode($people, JSON_PRETTY_PRINT) ?>;
			var name = "Name: " + people[index].first_name + " " + people[index].last_name;
			var email = "Email: " + people[index].email;
			var userInfo = name + "\n" + email;
			alert(userInfo);
		}
		</script>
</head>

<body>

	<h1>DMS Application Test</h1>
	<table border="1">
		<thead>
			<tr>
				<th width="150px">Index</th>
				<th width="150px">First name</th>
				<th width="150px">Last name</th>
				<th width="150px">Email</th>
				<th width="150px">Alert</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($people as $person): array_map('htmlentities', $person); ?>
			<tr>
				<td width ="150px"><?php echo implode('</td><td width ="150px">', $person); ?></td>
				<td align="center"><input type="button" value="Click for Alert" onclick="personAlert(<?php echo ($person['id'] - 1)?>)"></td>
			</tr>
			<?php endforeach; ?>		
		</tbody>
	</table>
</body>
</html>
<?php
// @todo
//var_dump($_POST);
//var_dump($_FILES);

 $isFormSubmit = isset($_POST ['csv_file_upload']);
	if ($isFormSubmit === true) {


$csvFile = (isset($_FILES['csv_file']['tmp_name'])) ? $_FILES['csv_file']['tmp_name'] : false; // сокращенная запись if





// 1. CSV handler
//$csvFile = __DIR__ . '/data/users.csv';
//$csvFile = __DIR__ . '/data/users_empty.csv';
//$csvFile = __DIR__ . '/data/empty.csv';
if (!file_exists($csvFile)){
	echo "File $csvFile not found";
	die ();
}
$handle = fopen($csvFile, "r+");
if ($handle !== false) {
	$rows = [];	// создаем переменную в которую будут складываться строки
	while (($buffer = fgets($handle, 4096)) !== false) {
		$rows [] = explode(';', $buffer);
	}
	fclose($handle);
	if (count($rows) == 0 ) {
		echo "File $csvFile is empty";
		die();
	}


	$columns = $rows[0];
	$columnsCount = count($columns);
	$users = array_slice($rows, 1); // функция отбрасывает указанное количество строк массива
	$usersCount = count ($users);

	// var_dump($users);
	// foreach ($users as $user) {
	// 	var_dump($user);
	// }
	}
}

// 2. Output 
// 
?>
<!DOCTYPE html>
<html>
<head>
	<title>csv loader</title>
</head>
<body>
		<h1>CSV loader</h1>
	<form method="POST" name="csv_file_upload" enctype="multipart/form-data">
		<input type="hidden" name="csv_file_upload" value="y"> <!-- скрытая строка формы-->
		Csv file <input type="file" name="csv_file">
		<input type="submit" name="csv_file_upload" value="Upload">
	</form>	
	
	<?php if ($isFormSubmit === true): ?>
		<table border="1" cellpadding="0" cellspacing="0" style="text-align: center;">
			<thead>
				<tr>
					<?php foreach ($columns as $name): ?>
					<td>
						<?php echo "$name"; ?>
					</td>
					<?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<?php if ($usersCount >0) : ?>
				<?php foreach ($users as $user): ?>
					<tr>
						<?php foreach ($user as $property): ?>
						<td>
							<?php echo $property; ?>
						</td>
						<?php endforeach; ?>
					</tr>
					<?php endforeach; ?>
				<?php else:?>
					<tr>
						<td colspan="<?php echo $columnsCount; ?>">
							Users not found
						</td>
					</tr>
				<?php endif;?>
			</tbody>
		</table>
	<?php endif;?>
</body>
</html>
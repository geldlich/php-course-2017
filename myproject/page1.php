<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$list = [];

$handle = fopen('text.txt', 'r+');

while (($buffer = fgets($handle, 4096)) !== false) {	
	$row = explode(";", $buffer);
	$list[] = $row; //echo $buffer. "<br>";

}

//var_dump($list);

fclose($handle);
?>
<?php if (count($list) > 0): ?>
<table style="color: #5892D5">
  <thead>
    <tr>
      <?php foreach ($list as $row): array_map('htmlentities', $row); ?>
    </tr>
  </thead>
  <tbody>
	<tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
</body>
</html>
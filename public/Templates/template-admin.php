<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
<?php include __DIR__ . '/../Parts/header.php'; ?>
<?php
$filePath = __DIR__ . '/../Parts/Admin/' . $partName . '.php';
if (file_exists($filePath)) {
    include $filePath;
} else {
    echo "<p>Template not found: {$filePath}</p>";
}
?>
<?php include __DIR__ . '/../Parts/footer.php'; ?>
</body>
</html>

<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
<?php
//set session
$_SESSION["Username"] = "prasanga";
$_SESSION["Password"] = "R@man741";
echo "Session is set sucessfully."
?>
    
</body>
</html>
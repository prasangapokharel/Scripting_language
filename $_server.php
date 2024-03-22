<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            margin-top: 30px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 18px;
            padding: 14px 20px;
            background-color: blue;
            color: white;
            
        }
    </style>
</head>
<body>
    
   <p><?php echo $_SERVER['PHP_SELF']; ?></p> <br>
   <p><?php echo $_SERVER['SERVER_NAME'];; ?></p> <br>

    

</body>
</html>
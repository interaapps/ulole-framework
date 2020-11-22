<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><?= htmlspecialchars($error) ?></h1>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap');
        * {
            font-family: manrope, sans-serif;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            margin-top: 70px;
            font-size:  45px;
        }
    </style>
</body>
</html>
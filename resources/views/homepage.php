<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Welcome to ulole, <?= $name ?? "" ?>!</h1>
    <div id="links">
        <a href="https://github.com/interaapps/ulole-framework/blob/master/README.md">Simple Overview</a>
        <a href="https://github.com/interaapps/ulole-framework/wiki">Docs</a>
        <a href="https://github.com/interaapps/ulole-framework">GitHub</a>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap');

        * {
            font-family: manrope, sans-serif;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-top: 70px;
            font-size: 45px;
        }
        #links {
            margin: auto;
            width: fit-content;
            text-align: center;
        }
        #links a,
        #links a:visited {
            color: #434343;
            text-decoration: none;
            font-size: 25px;
            margin: 9px;
        }
    </style>
</body>
</html>
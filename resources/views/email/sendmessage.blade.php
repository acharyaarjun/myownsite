<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        body{
            min-width: 500px;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        div{
            background: rgb(188, 166, 166);
            padding: 100px;
            line-height: 20px;
            width: 500px;
        }
    </style>
</head>
<body>
    <div>
        <b>Hi you received a message form {{ $fullname }}</b> <br>
        Name: {{ $fullname }} <br>
        Email: {{ $email }} <br>
        Subject: {{ $subject }} <br>
        Message: {{ $usermessage }} <br>
        Thank you!
    </div>
</body>
</html>
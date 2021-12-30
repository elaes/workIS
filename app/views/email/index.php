<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include '../app/views/layout/header.php'?>
    <section>
        <h1>Email Page</h1>
        <form action="/public/email/send" method="post">
            <label for="">to : </label><input type="text" name="to">
            <br>
            <label for="">content : </label><textarea name="content"></textarea>
            <br>
            <input type="submit" value="send">
        </form>
    </section>    
</body>
</html>
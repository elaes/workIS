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
        <h1>Email Result Page</h1>
        
    </section>
    <span>to : </span><span><?= $data['to'] ?></span><br>
    <span>content : </span><span><?= $data['message'] ?></span>
</body>
</html>


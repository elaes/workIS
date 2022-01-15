<?php include 'app/views/layout/header.php'?>
    <section>
        <h1>Email Result Page</h1>
        
    </section>
    <span>to : </span><span><?= $data['to'] ?></span><br>
    <span>content : </span><span><?= $data['message'] ?></span>
    <span>Tel : </span><span><?= $data['tel'] ?></span>
    <br>
    <a href="/email/send">Send</a>
<?php include 'app/views/layout/footer.php'?>


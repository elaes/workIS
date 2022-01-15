<?php include 'app/views/layout/header.php'?>
<section>
        <h1>Email Page</h1>
        <form action="/email/preview" method="post">
            <label for="">to : </label><input type="text" name="to">
            <br>
            <label for="">poste : </label><textarea name="poste"></textarea>
            <br>
            <input type="submit" value="send">
        </form>
    </section>    
<?php include 'app/views/layout/footer.php'?>

<html>
<head></head>
<body>

    <form>
        <?php
        require 'handler.php';
        foreach (getDataFromFile('comments.txt') as $key => $value){
            echo '<p>';
            echo '<label>';
            echo $key['login'];
            echo '</label>';
            echo "<textarea>";
            echo $key['text'];
            echo "</textarea>";
        }
        ?>
        <label for="Login">Your name</label>
        <input type="text" name="Login">
        <label for="text">Enter a comment</label>
        <textarea name="text"></textarea>

        <input type="submit" content="Submit">
    </form>
</body>
</html>
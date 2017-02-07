<html>
<head></head>
<body>

<form>

    <label for="text">Enter a text</label>
    <textarea name="text"></textarea>

    <input type="submit" content="Submit">

        <?php
            if (!empty($_POST)){
                $text = $_POST['text'] ?? "";
                $reverseText = "";
                for ($i=count($text)-1; $i>=0; $i--){
                    $reverseText .= $text[$i];
                }
                echo $reverseText;
            }
        ?>
</form>
</body>
</html>
<html>
<head>

</head>
<body>
    <form method="post" action="function.php">
        <div class="form-group">
            <label for="a">Sentence1</label>
            <textarea name="a" class="form-control" id="a" placeholder="Enter first sentence"></textarea>
        </div>
        <div class="form-group">
            <label for="b">Sentence2</label>
            <textarea name="b" class="form-control" id="b" placeholder="Enter second sentence"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <?php
    function getCommonWords(string $a, string $b): array{
        $separator = ' ';
        $array1 = explode($separator, $a);
        $array2 = explode($separator, $b);
        $rezult = [];
        for ($i = 0; $i<count($array1); $i++){
            if ( (in_array($array2, $array1[i])) && !isset($rezult[$array1[i]])){
                $rezult[] = $array1[i];
            }
        }

        return $rezult;
    }
    ?>

</body>

</html>

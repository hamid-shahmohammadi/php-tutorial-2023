<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>website</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
        // آرایه های پیوندی
        // Associative-Arrays
        $urls=[
            [
                'name' => 'php',
                'url'  =>'https://www.php.net/',
                'author' => 'john doe'
            ],
            [
                'name' => 'python',
                'url'  =>'https://www.python.org/',
                'author' => 'jane doe'
            ],
            [
                'name' => 'iran laravel',
                'url'  =>'https://iranlaravel.ir/',
                'author' => 'hamid shah mohammadi'
            ],

        ]

    ?>

    <ul>
        <?php foreach($urls as $url) : ?>
            <li>
                <a href="<?= $url['url'] ?>" >
                <?= $url['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php
        $age = array("ali"=>"35", "hamid"=>"37", "reza"=>"43");

        // or

        /* comment
         multi
         line */

        $age['ali'] = "35";
        $age['hamid'] = "37";
        $age['reza'] = "43";

        foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
    ?>

</body>

</html>
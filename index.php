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
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        // or

        /* comment
         multi
         line */

        $age['Peter'] = "35";
        $age['Ben'] = "37";
        $age['Joe'] = "43";
    ?>

</body>

</html>
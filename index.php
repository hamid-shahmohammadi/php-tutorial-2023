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

        ];


        function searchAuthor($urls,$author){
            foreach($urls as $url){
                $filterUrls=[];
                if($url['author'] === 'hamid shah mohammadi'){
                    $filterUrls[]=$url;
                }
            }

            return $filterUrls;
        }

        //var_dump(searchAuthor($urls,'hamid shah mohammadi'));

        if(1==="1"){
            echo "1==1";
        }

    ?>

    <ul>
        <?php //foreach($urls as $url) : ?>
        <?php foreach(searchAuthor($urls,'hamid shah mohammadi') as $url) : ?>
            <?php //if($url['author'] === 'hamid shah mohammadi') : ?>
            <li>
                <a href="<?= $url['url'] ?>" >
                <?= $url['name'] ?>
                </a>
            </li>
            <?php //endif ?>
        <?php endforeach; ?>
    </ul>

    

</body>

</html>
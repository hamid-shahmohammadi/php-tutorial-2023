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

    <ul>
        
        <?php foreach($filterUrls as $url) : ?>            
            <li>
                <a href="<?= $url['url'] ?>" >
                <?= $url['name'] ?>
                </a>
            </li>           
        <?php endforeach; ?>
    </ul>    

</body>

</html>
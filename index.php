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
                'author' => 'john doe',
                'created_at'=>1391
            ],
            [
                'name' => 'python',
                'url'  =>'https://www.python.org/',
                'author' => 'jane doe',
                'created_at'=>1381
            ],
            [
                'name' => 'iran laravel',
                'url'  =>'https://iranlaravel.ir/',
                'author' => 'hamid shah mohammadi',
                'created_at'=>1385
            ],

        ];

        // lambda function
        // $searchAuthor=function ($urls,$author){
        //     $filterUrls=[];
        //     foreach($urls as $url){                
        //         if($url['author'] === 'hamid shah mohammadi'){
        //             $filterUrls[]=$url;
        //         }
        //     }

        //     return $filterUrls;
        // };

        // $filterUrls=$searchAuthor($urls,'hamid shah mohammadi');
        
        
        // anonymouse function
        // function search($items,$key,$value){
        //     $filterItem=[];
        //     foreach($items as $item){                
        //         if($item[$key] === $value){
        //             $filterItem[]=$item;
        //         }
        //     }

        //     return $filterItem;
        // };

        // $filterUrls=search($urls,'created_at',1385);  
        
        // function search($items,$fn){
        //     $filterItem=[];
        //     foreach($items as $item){                
        //         if($fn($item)){
        //             $filterItem[]=$item;
        //         }
        //     }

        //     return $filterItem;
        // };

        // $filterUrls=search($urls,function($url){
        //     return $url['created_at'] > 1380;
        // }); 
        
        $filterUrls=array_filter($urls,function($url){
            return $url['created_at'] > 1380;
        }); 

    ?>

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
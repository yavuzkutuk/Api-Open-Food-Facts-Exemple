<?php
/**
 * Création Yavuz KUTUK
 * yavuz@wildcodeschool.fr
 *
 */
require '../vendor/autoload.php';
require '../src/Api.php';
require '../src/Collection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>API OPEN FOOD FACT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body{
            top:0;
            background: url("http://villededisraeli.ca/wp-content/uploads/2018/08/Halloween.jpg") 100% 100%;
        }
        #page{
            height: 100vh;
            width: 100%;
            top: 0px !important;
        }
        .yk-wrapper{
            margin:10% auto;
            border-radius:3px;
            padding:20px;
            width:500px;
        }

        .yk-wrapper h1{
            text-align: center;
            color: #FFFFFF;
        }
        .yk-wrapper form{
            border-radius:3px;
            width:100%;
        }

        .yk-wrapper form input[type=text]{
            border:1px solid #666;
            margin-right: 20px;
            border-radius:3px;
            width: 100%;
        }

        .yk-wrapper button{
            margin:0 30% 0 30%;
            width:40%;
        }

        .result .row{
            background-color: #FFFFFF;;
            border-radius: 5px;
            border: 1px solid #000000;
            padding: 10px;
            margin:0 auto;
            width:900px;
        }

        a{
            margin:auto 0.5%;
            /* Si on ne met pas d'attribut href sur un <a>, le curseur ne change pas. */
            cursor: pointer;
        }
        
        #search{
            color: #000;
            text-transform: uppercase;
            background-color: #FFF;
            font-weight: bold;
        }

    </style>
</head>
<body>
<div id="page">
<div class="container yk-wrapper">
    <h1>API OPEN FOOD FACTS</h1>
    <form class="form" method="post">
        <div class="form-group mb-2">
            <label class="sr-only">Recherche</label>
            <input type="text" class="form-control-plaintext" name="search" id="search" value="">
        </div><br/>
        <button type="submit" class="btn btn-success mb-2" name="GO" value="go">GO</button> <a href="/" class="text-align-right">Reinitialiser</a>
    </form>
    <ol id="yavuz" class="list-group list-group-flush"></ol>
</div>

<?php
if (@$_POST['GO']<>''){
    $obj = new \OpenFoodFacts\Api();
    $resultat = $obj->search(@$_POST['search'], 1, 50, '');
    echo '<div class="container result"><div class="row">';
        foreach ($resultat as $key => $value) {
            if(@$value->image_front_small_url<>''){
            echo '<div class="card col-2 mb-3" style="width: 18rem;">';
                echo '<img class="card-img-top" src="'.$value->image_front_small_url.'" style="max-height:100px"/>';
                echo '<div class="card-body">';
                    echo '<h6 class="card-title">'.$value->product_name.'</h6>';
                echo '</div>';
                echo '<a href="#" class="btn btn-primary btn-sm mb-3">En savoir plus</a>';
            echo '</div>';
            }
        }
     echo '</div></div>';
//    print_r($resultat);

}
?>
</div>
</body>
</html>
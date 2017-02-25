<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "3931168463-lm4Fmcz3YsQTT5B4EjbECElE1YfmajWFBYt0SBY",
    'oauth_access_token_secret' => "AR23j8NFtPzYHxsufmteaws4zy8XzyQznTSgNHLnvpYFB",
    'consumer_key' => "jQmI5whHBMDuy0GuvbAEqP6aP",
    'consumer_secret' => "smhEhwOWkSHWNVlADAXyRfD9yetYkdbEPcY2ndl20PlPTEBg27"
);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title>Usuario Red Social</title>
    </head>

    <body>
        <div id="container">

            <div id="header">
                <h1>Usuario de red social</h1>
            </div>

            <div id="content">
                <?php
                $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
                $getfield = '?screen_name=yo_lalily&count=10';
                $requestMethod = 'GET';
                $twitter = new TwitterAPIExchange($settings);
                $json = $twitter->setGetfield($getfield)
                        ->buildOauth($url, $requestMethod)
                        ->performRequest();

                print_r($json);

                $json = json_decode($jsonraw);
                $num_items = count($json->statuses);

                for ($i = 0; $i < $num_items; $i++) {

                    $user = $json[$i];

                    $fecha = $user->created_at;
                    $url_imagen = $user->user->profile_image_url;
                    $screen_name = $user->user->screen_name;
                    $tweet = $user->text;

                    $imagen = "<a href='https://twitter.com/" . $screen_name . "' target=_blank><img src=" . $url_imagen . "></img></a>";
                    $name = "<a href='https://twitter.com/" . $screen_name . "' target=_blank>@" . $screen_name . "</a>";

                    $rawdata[$i][0] = $fecha;
                    $rawdata[$i]["FECHA"] = $fecha;
                    $rawdata[$i][1] = $imagen;
                    $rawdata[$i]["imagen"] = $imagen;
                    $rawdata[$i][2] = $name;
                    $rawdata[$i]["screen_name"] = $name;
                    $rawdata[$i][3] = $tweet;
                    $rawdata[$i]["tweet"] = $tweet;
                }


            //DIBUJAMOS LA TABLA
                echo '<table border=1>';
                $columnas = count($rawdata[0]) / 2;
                //echo $columnas;
                $filas = count($rawdata);
                //echo "<br>".$filas."<br>";
                //Añadimos los titulos

                for ($i = 1; $i < count($rawdata[0]); $i = $i + 2) {
                    next($rawdata[0]);
                    echo "<th><b>" . key($rawdata[0]) . "</b></th>";
                    next($rawdata[0]);
                }
                for ($i = 0; $i < $filas; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $columnas; $j++) {
                        echo "<td>" . $rawdata[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
                echo '</table>';
                $twitterObject = new Twitter();
                $jsonraw = $twitterObject->getTweets("yo_lalily");
                $rawdata = $twitterObject->getArrayTweets($jsonraw);
                $twitterObject->displayTable($rawdata);
                ?>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>

        </div>
    </body>
</html>

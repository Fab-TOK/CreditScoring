<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Risque de credit</title>
</head>
<body>

    <?php
    if (isset($_POST["send"])) {
        $age = $_POST["age"];
        $revenu = $_POST["revenu"];
        $habitation = $_POST["habitation"];
        $activity = $_POST["activity"];
        $motif = $_POST["motif"];
        $montprete = $_POST["montprete"];
        $taux = $_POST["taux"];

        if (!empty($age) && !empty($revenu) && !empty($habitation) && !empty($activity) && !empty($motif)
                 && !empty($montprete) && !empty($taux)) {

            $url = "http://monapiscoring.herokuapp.com/credit";
            
            $data_array =  array(
                "age" => $age,
                "revenu" => $revenu,
                "habitation" => $habitation,
                "activity" => $activity,
                "motif" => $motif,
                "montprete" => $montprete,
                "taux" => $taux
            );
            // $data = json_encode($data_array);
            // $data = http_build_query($data_array);
            
            $url = sprintf("%s?%s", $url, http_build_query($data_array));
            $curl = curl_init($url);

            // curl_setopt($curl, CURLOPT_POST, true);
            // curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            $result = curl_exec($curl);
            if(!$result){
                die("Connection Failure");
            }
            curl_close($curl);
            $res = json_decode($result, true);

            $tab=array();
            $i=0;
            foreach($res as $key=>$value){
                $tab[$i] = $value;
                $i++;
            }
            if ($tab[0]==0) {
                $text = "Bon client";
                $pred = $tab[1];
            }
            if ($tab[0]==1) {
                $text = "Mauvais client";
                $pred = $tab[2];
            }
            echo '<h1>Merci d\'avoir utilisé notre api</h1>';
            echo '<div class ="container">';
            echo '<p class="centr">Pour ce client : </p>';
            echo "<p> La prédiction est : <b>".$text."</b> </p>";
            echo "<p> Avec une probalité de : ".$pred."</p>";
            echo "</div>";
        }else {  
            echo '<h1> Veuillez réessayer ! </h1>';
            echo '<div class ="container" > <p class="cent"> Tous les champs sont requis pour la prédiction... </p> </div>';
        }
    }
    ?> 

</body>
</html>

<style>
    *{
        font-family: "Merriweather Sans", sans-serif;
    }
    body{
        background: #104358;
    }
    h1{
        text-align: center;
        color: white;
    }
    .container{
        color: rgb(0, 0, 0);
        background-color: #c59d9d;
        border-radius: 5px;
        width: 400px;
        padding: 40px;
        margin: 80px auto ;
        -webkit-box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.75);
        box-shadow: -1px 3px 18px 0px rgba(0, 0, 0, 0.75);  
    }
    p{
        font-size: 20px;
    }
    .centr{
        text-align: center;
    }
    .cent{
        text-align: center;
        font-size: 18px;   
    }
</style>
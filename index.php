<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],


    ];


    foreach ($hotels as $element) {

        foreach ($element as $key => $value) {
        }
    }


    ?>

    <form action="index.php" method="GET">
        <h5 class="d-inline-block">Parking:</h5>
        <input type="radio" id="Si" name="parking" value="Si">
        <label for="Si">Si</label>
        <input type="radio" id="No" name="parking" value="No">
        <label for="No">No</label>
        <button type="submit">Invia</button>
    </form>




    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <?php

                foreach (array_keys($hotels[0]) as $element) {
                    echo "<th scope='col'> {$element} </th>";
                }



                ?>
            </tr>
        </thead>
        <tbody>
            <?php

            
            


            if(isset($_GET["parking"])){
                if ($_GET["parking"] == 'Si') {
                    $_GET["parking"] = true;
                } else {
                    $_GET["parking"] = false;
                }

                $contatore = 1;
                for ($i = 0; $i < count($hotels); $i++) {

                    if ($hotels[$i]["parking"] == $_GET["parking"]) {
                        echo
                        "<tr> 
                        <th scope='row'>{$contatore}</th>";


                        $contatore++;

                        if ($hotels[$i]["parking"]) {
                            $hotels[$i]["parking"] = "Si";
                        } else {
                            $hotels[$i]["parking"] = "No";
                        }



                        foreach ($hotels[$i] as $element) {
                            echo "<td> {$element} </td>";
                        }

                        echo "</tr>";
                    } else {


                        echo
                        "<tr class='d-none'> 
                    <th scope='row'>{$contatore}</th>";


                        $contatore++;

                        if ($hotels[$i]["parking"]) {
                            $hotels[$i]["parking"] = "Si";
                        } else {
                            $hotels[$i]["parking"] = "No";
                        }



                        foreach ($hotels[$i] as $element) {
                            echo "<td> {$element} </td>";
                        }

                        echo "</tr>";
                    }
                }

            }else{
                $contatore = 1;
                for ($i = 0; $i < count($hotels); $i++) {

                        echo
                        "<tr> 
                        <th scope='row'>{$contatore}</th>";


                        $contatore++;

                        if ($hotels[$i]["parking"]) {
                            $hotels[$i]["parking"] = "Si";
                        } else {
                            $hotels[$i]["parking"] = "No";
                        }



                        foreach ($hotels[$i] as $element) {
                            echo "<td> {$element} </td>";
                        }

                        echo "</tr>";
                    }
            }


            

            

            ?>

        </tbody>
    </table>






</body>

</html>
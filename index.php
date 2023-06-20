<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php-hotel</title>
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
            ]
        ];
    ?>

    <table class="table">
                <thead>
                    <tr>
                        <?php
                            $keys = [];
                            foreach ($hotels as $key => $hotel) {
                                foreach ($hotel as $key => $value){
                                    if (!in_array($key, $keys)) {
                                        $keys[] = $key;
                                        echo "<th scope='col'>" . $key . "</th>";
                                    }
                                }
                            }
                        ?> 
                    </tr>       
                </thead>
                <tbody>
                    <?php
                        foreach ($hotels as $key => $hotel) {
                            echo "<tr>";
                            foreach ($hotel as $key => $value) {
                                if ($key == 'name') {
                                    echo "<th>". $value. "</th>";
                                }elseif ($key == 'parking'){
                                    if($value){
                                        echo "<td>Si</td>";
                                    }else{
                                        echo "<td>No</td>";
                                    }
                                }else{
                                    echo "<td>". $value. "</td>";
                                }
                            }
                            echo "</tr>";
                        }
                    ?>  
                </tbody>
    </table>        
</body>
</html> 
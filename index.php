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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <!-- Lista Hotel -->
    <div class="col-8 mx-auto mt-4">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php
                    foreach ($hotels[0] as $title => $info) {
                        echo "<th scope=\"col\">$title</th>";
                    };
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $index_hotel => $hotel) {
                    echo "<tr>";
                    echo "<th scope=\"row\">$index_hotel</th>";

                    foreach ($hotel as $hotel_info_key => $hotel_info) {

                        if ($hotel_info_key == 'parking') {
                            if ($hotel_info == true) {
                                echo "<td>✅</td>";
                            } else {
                                echo "<td>❌</td>";
                            }
                        } else {
                            echo "<td>$hotel_info</td>";
                        }
                    };
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
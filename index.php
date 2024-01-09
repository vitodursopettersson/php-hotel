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

    <!-- Titolo -->
    <div class="col-8 mx-auto mt-4">
        <h1>Php Hotel</h1>
    </div>

    <!-- Form Ricerca -->
    <div class="col-8 mx-auto mt-4">
        <h6>Filter</h6>
        <form class="d-flex align-items-baseline" method="GET">

            <div class="mr-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="parking" name="parking">
                    <label class="form-check-label" for="parking">
                        parking
                    </label>
                </div>
            </div>

            <div class="mr-5">
                <label class="visually-hidden" for="minimum-vote">minimum vote</label>
                <select class="form-select" id="minimum-vote" name="minimum-vote">
                    <option selected value="">choose...</option>
                    <option value="1">one</option>
                    <option value="2">two</option>
                    <option value="3">three</option>
                    <option value="4">four</option>
                    <option value="5">five</option>
                </select>
            </div>

            <div class="mr-5">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>

        </form>
    </div>

    <?php
    $parking = $_GET["parking"];
    $minimum_vote = $_GET["minimum-vote"];
    $filter_hotels = [];

    foreach ($hotels as $hotel) {
        if ($parking == false) {
            $filter_hotels[] = $hotel;
        } else {
            if ($hotel['parking'] == $parking) {
                $filter_hotels[] = $hotel;
            };
        }
    };


    ?>

    <!-- Lista Hotel -->

    <div class="col-8 mx-auto mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center</th>

                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($filter_hotels as $index_hotel => $hotel) {
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
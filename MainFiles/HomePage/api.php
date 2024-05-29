<?php
$apiKey = "AIzaSyDyWGFp9mVgy-3lttG7G0obXKqbkQuB_sY";
$city = isset($_GET['city']) ? $_GET['city'] : "Paris"; 
$brands = ["Louis Vuitton", "Hermes", "Prada", "Chanel", "Dior", "Nike", "Balenciaga"];

function getPlaces($apiKey, $brand, $city) {
    $apiUrl = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=" . urlencode($brand . " in " . $city) . "&key=" . $apiKey;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        curl_close($ch);
        exit;
    }

    curl_close($ch);

    return json_decode($response, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokacionet e Markave në <?php echo $city; ?></title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Lokacionet e Markave në <?php echo $city; ?></h1>

        <?php
        foreach ($brands as $brand) {
        $placesData = getPlaces($apiKey, $brand, $city);
        echo "<h2>Lokacionet për $brand në $city:</h2>";
        if (!empty($placesData['results'])) {
            echo "<table>";
            echo "<tr><th>Emri</th><th>Adresa</th><th>Vendi (Gjeresia, Gjatesia)</th></tr>";
            foreach ($placesData['results'] as $place) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($place['name']) . "</td>";
                echo "<td>" . htmlspecialchars($place['formatted_address']) . "</td>";
                echo "<td>".htmlspecialchars($place['geometry']['location']['lat']).", ".htmlspecialchars($place['geometry']['location']['lng'])."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Asnjë lokacion nuk u gjet për $brand në $city.</p>";
        }
        }
        ?>
</body>
</html>

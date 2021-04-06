<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poke_thing</title>
</head>
<body>
    <?php
        $data = file_get_contents('data.json');
        $parse_data = json_decode($data, true);
        echo '<pre>';
        echo($parse_data["count"]);
        echo '<br>';
        $counter = 0;
        while ($counter<$parse_data["count"]) {
           echo '['. $counter . ']';
           echo '<br>';
             print_r($parse_data['results'][$counter]['name']); 
             echo '<br>';
             print_r($parse_data['results'][$counter]['url']);
             echo '<br>';
             $counter++;
         }

        $chunks = array_chunk($parse_data['results'], 50, true);
        print_r($chunks[2]);
        print_r($chunks[htmlspecialchars($_GET["page"])]);
        
        echo '</pre>';
    ?>
</body>
</html>
<html lang="hu">
<head>
    <title>Advertisement app 0.1</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../public/css/base.css"/>
</head>
<body>

<h1>Advertisement page</h1>
<?php
    //create a card view for each Advertisement object
    echo "Number of active advertisements: " . count($data['data']);
    foreach($data['data'] as $ad) {
        echo '  <div class="spacer"/>
                <div class="card">
                <h3> '. $ad->get_title() . '</h3>
                </div>';
    }
?>

</body>
</html> 

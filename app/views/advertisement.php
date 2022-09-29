<html lang="hu">
<head>
    <link rel="stylesheet" href="../public/css/base.css"/>
</head>
<body>

<h1>Advertisement page</h1>
<?php
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

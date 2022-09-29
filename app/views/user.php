<html lang="hu">
<head>
    <title>Advertisement app 0.1</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../public/css/base.css"/> 
</head>
<body>

<h1>Users Page</h1>
<?php
    //create a card view for each User object
    echo "Number of users registered: " . count($data['data']);
    foreach($data['data'] as $user){
        echo'   <div class="spacer"/>
                <div class="card">
                <h3> '. $user->get_name() . '</h3>
                </div>';
    }
?>

</body>
</html> 

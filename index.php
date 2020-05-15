<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head>

<body>
    <?php
        $paragraph = "Welcome to PHP, are you ready to die?";
        $badword = $_GET['ready'];
    ?>

    <p><?php echo $paragraph; ?></p>

    <p>The paragraph has a length of <?php echo strlen($paragraph); ?> characters </p>

    <?php $new_paragraph = str_replace($_GET['ready'],'***',$paragraph); ?>

    <p><?php echo $new_paragraph ?></p>

</body>

</html>
<?php

header("refresh:6; eindopdracht\html\index.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/succes.css">
    <title>Succes!</title>
</head>
<body>
    <div class="container">
    <h1><strong>Welkom <?= $_POST["username"] ?> !</strong>
    </h1>

    <h2>Jij wordt terug gestuurd in</h2>
    <span></span>

</div>


    <script>
        let count = 5;
        const interval = setInterval(() => {
            document.querySelector('span').innerHTML = count;
            count--;
            if (count < 0) {
                clearInterval(interval);
            }
        }, 1000);
    </script>
</body>
</html>

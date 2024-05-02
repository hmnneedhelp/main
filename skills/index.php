<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Навыки & услуги</title>
    <style>
        body{
            background-image: url(./../src/img/pattern.png);
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
        #scroll::-webkit-scrollbar {
            display: none;
        }

        #scroll {
            scrollbar-width: none;
        }
    </style>
</head>
<body class="min-h-screen items-center">
    <?php
        include('../include/header.php');

        include('../include/for_skills/mainFrame.php');

        include('../include/for_skills/form.php');

        include('../include/footer.php')
    ?>
</body>
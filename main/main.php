<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>GlobalTradeSkills</title>
    <style>
        body{
            background-image: url(/src/img/pattern.png);
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
    
        include ('../include/header.php');
    
        include('../include/for_main/mainFrame.php');
        
        include('../include/for_main/pluses.php');

        include('../include/for_main/slider.php');

        include('../include/for_main/review.php');

        include('../include/for_main/contact.php');

        include('../include/footer.php');

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cracker 2.0</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>

    <!-- Rubik Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>

    <!-- Local CSS -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- Stacked Card CSS -->
    <link rel="stylesheet" href="styles/stackedCards.css">

    <!-- Stacked Card JS -->
    <script src="js/stackedCards.js"></script>
    <!-- Styles -->
    
</head>
<body>
    <!-- Header -->
    @section('header')
    @show

    <!-- Content -->
    @section('content')
    @show

    <!-- Footer -->
    @section('footer')
    @show

    <!-- Bootstrap 5.1.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Stacked Card JS -->
    <script src="js/stackedCards.min.js"></script>

    <script>
        var stackedCardSlide1 = new stackedCards({
            selector: '.stacked-cards-slide-1',
            layout: "slide",
            transformOrigin: "center",
        });

        stackedCardSlide1.init();

        var stackedCardSlide2 = new stackedCards({
            selector: '.stacked-cards-slide-2',
            layout: "slide",
            transformOrigin: "center",
        });

        stackedCardSlide2.init();
    </script>
</body>
</html>
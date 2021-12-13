<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Rumah Sakit Rujukan | Cracker 2.0</title>

  <!-- Bootstrap 5.1.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="image/favicon.svg" />

  <!-- Font Awesome CDN CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Rubik Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>

  <!-- Local CSS -->
  <link rel="stylesheet" href="styles/hospital.css">

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
</body>
</html>
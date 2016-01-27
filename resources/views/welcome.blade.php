<!DOCTYPE html>
<html>
<head>
  <title>Martins Dumbris</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="/css/app.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  @include('partials.header')

  @include('partials.about')

  @include('partials.work') 

  @include('partials.clients')  

  @include('partials.footer')
  
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').slider();
    });
  </script>

</body>
</html>
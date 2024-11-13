<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/stylesheet.css" />
</head>
<body class="bg-dark text-light">
    <!-- playlist header -->
     <header class="container-fluid">
        <!-- playlist image -->
        <img src="/images/placeholder.jpg" alt="playlist image" class="img-fluid" />
        <!-- playlist information -->
        <!-- Action buttons -->
        <!-- Song information row -->
    </header>
    <!-- Songs -->
     <main class="container-fluid" id="songs">
        
        <?php 
        include 'songs.php';

        ?>
    </main>

    <!-- Media controls -->
     <footer class="footer fixed-bottom bg-dark">


        <!-- Progress bar -->

        
     </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>
</html>
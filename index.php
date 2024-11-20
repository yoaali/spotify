<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body class="bg-dark text-light">
    <!-- playlist header -->
    <header class="D container-fluid album">
        <!-- playlist image -->
        <div class="D row">
            <div class="col text-center">
                <img src="/images/album_cover.png" alt="katy" class="D img-fluid mt-3" />
                <div class="D m-2 row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black"
                        class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z" />
                    </svg>
                </div>
            </div>
            <div class="D col align-content-center">
                <p1>Playlist</p1>
                <h2> On Repeat </h2>
                <p> Songs stuck in my head </p>
                <p> Created By Sam Bam</p>
            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php
include 'songs.php';

function create_song($index)
{
    global $songs;

    $song_title = $songs[$index]['title'];
    $song_image = $songs[$index]['cover'];
    $song_album = $songs[$index]['album'];
    $song_artist = $songs[$index]['artist'];
    $song_duration = $songs[$index]['duration'];

    echo "<div class=\"song-row d-flex gap-3 border-bottom align-items-center\">";
    echo "<img class=\"song-cover\" src=\"$song_image\" />";
    echo "<p> $song_title </p>";
    echo "<p> $song_album </p>";
    echo "<p> $song_artist </p>";
    echo "<p> $song_duration </p>";
    echo "</div>";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-light">
    <!-- playlist header -->
    <header class="container-fluid">
        <!-- playlist image -->
        <!-- <img src="" alt="playlist image" class="img-fluid" /> -->
        <!-- playlist information -->
        <!-- Action buttons -->
        <!-- Song information row -->
    </header>
    <!-- Songs -->
    <main class="container-fluid" id="songs">
        <div
            id="song-info-row"
            class="container-fluid text-light text-center border-top border-bottom border-dark py-1">
            <div class="row">
                <small class="col-1 px-0">#</small>
                <small class="col text-start">Title</small>
                <small class="col-md-3 col-lg-2 d-none d-md-block text-start">Album</small>
                <small class="col-lg-2 d-none d-lg-block text-start">Artist</small>
                <small class="col-2 px-0"><i class="bi bi-clock-fill"></i></small>
            </div>
        </div>
        <?php
        for ($i = 0; $i < count($songs); $i++) {
            create_song($i);
        }
        ?>
    </main>

    <!-- Media controls -->
    <footer class="container-fluid footer fixed-bottom bg-dark">
        <div class="text-center py-2">
            <button class="btn btn-pb-previous" type="button" aria-label="Shuffle">
                <i class="bi bi-shuffle text-secondary"></i>
            </button>
            <button class="btn btn-pb-previous" type="button" aria-label="Previous">
                <i class="bi bi-skip-backward-fill text-secondary"></i>
            </button>
            <button class="btn btn-pb-previous" type="button" aria-label="Play/Pause">
                <i class="bi bi-play-fill text-secondary"></i>
            </button>
            <button class="btn btn-pb-previous" type="button" aria-label="Skip Forward">
                <i class="bi bi-skip-forward-fill text-secondary"></i>
            </button>
            <button class="btn btn-pb-previous" type="button" aria-label="Repeat">
                <i class="bi bi-repeat text-secondary"></i>
            </button>
        </div>

        <!-- Progress bar -->
        <div class="progress" role="progressbar" aria-label="primary example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar text-bg-primary" style="width: 25%">25%</div>
        </div>

    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>
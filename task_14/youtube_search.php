<?php
$apiKey = 'AIzaSyACUALSM-kOUzBK6gS1KBuvG107Q2YBDik';

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $query = urlencode($_GET['search']);
    $maxResults = 10;
    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=$query&type=video&maxResults=$maxResults&key=$apiKey";

    $response = file_get_contents($url);
    $videos = json_decode($response, true);
} 
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search YouTube</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        form { margin: 20px; }
        input { padding: 10px; width: 300px; }
        button { padding: 10px; cursor: pointer; }
        .results { display: flex; flex-wrap: wrap; justify-content: center; }
        .card { width: 250px; margin: 10px; padding: 10px; border: 1px solid #ddd; border-radius: 10px; }
        .card img { width: 100%; border-radius: 5px; }
        .card a { text-decoration: none; color: blue; }
    </style>
</head>
<body>

    <h2> Search on YouTube</h2>
    <form method="GET">
        <input type="text" name="search" placeholder=" search ..." required>
        <button type="submit">Search</button>
    </form>

    <?php if (isset($videos) && !empty($videos['items'])): ?>
        <h3>The result (<?= count($videos['items']) ?>) </h3>
        <div class="results">
            <?php foreach ($videos['items'] as $video): ?>
                <div class="card">
                    <img src="<?= $video['snippet']['thumbnails']['high']['url'] ?>" alt="Thumbnail">
                    <h4><?= $video['snippet']['title'] ?></h4>
                    <a href="https://www.youtube.com/watch?v=<?= $video['id']['videoId'] ?>" target="_blank">watch video  </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php elseif (isset($_GET['search'])): ?>
        <p>didn't found any result</p>
    <?php endif; ?>

</body>
</html>

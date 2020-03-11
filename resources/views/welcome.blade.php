<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Streamer Demo</title>
    <link href="https://cdn.bootcss.com/dplayer/1.25.0/DPlayer.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body, html, #player {
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
<div id="player"></div>
<script src="https://cdn.bootcss.com/dplayer/1.25.0/DPlayer.min.js"></script>
<script>
    new DPlayer({
        container: document.querySelector('#player'),
        video: { url: `http://localhost:8000/video` },
        autoplay: true,
    })
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Video Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            background: black;
            height: 100%;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <video id="fullscreenVideo" autoplay controls>
        <source src="{{ asset('videos/sample.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <script>
        // Try to launch full screen automatically
        window.onload = () => {
            const video = document.getElementById('fullscreenVideo');
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.webkitRequestFullscreen) {
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) {
                video.msRequestFullscreen();
            }

            video.play();
        };
    </script>
</body>
</html>

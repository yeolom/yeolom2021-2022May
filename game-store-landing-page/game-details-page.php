<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        #youtubePlayer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlaid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .overlaid-content {
            text-align: center;
            color: #fff;
            transform: translateY(50px);
            opacity: 0;
            transition: transform 1s ease, opacity 1s ease;
        }

        .animated-text {
            transform: translateY(0);
            opacity: 1;
        }

        .beat-download-btn {
            animation: beat 1.5s infinite;
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes beat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- Game Details Section -->
<div class="video-container">
    <div id="youtubePlayer"></div>
    <div class="overlaid">
        <div class="overlaid-content">
            <h1 class="animated-text">Game Title</h1>
            <p class="animated-text">More details about the game...</p>
            <a href="downloadform.php" class="btn btn-primary btn-lg beat-download-btn">Download Now</a>
        </div>
    </div>
</div>
<!-- Game Details Section -->

<?php include 'footer.php'; ?>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
    function onYouTubeIframeAPIReady() {
        var player = new YT.Player('youtubePlayer', {
            height: '100%',
            width: '100%',
            videoId: 'GyO1MtLhyt0', // Replace with your YouTube video ID
            playerVars: {
                'autoplay': 1,
                'controls': 0,
                'loop': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'mute': 1, // Autoplay requires mute
            },
            events: {
                'onReady': onPlayerReady,
            }
        });
    }

    function onPlayerReady(event) {
        event.target.playVideo();
        setTimeout(function () {
            document.querySelector('.overlaid').style.opacity = 1;
            document.querySelector('.overlaid-content').classList.add('animated-text');
        }, 3000);
    }

    document.addEventListener('DOMContentLoaded', function () {
        onYouTubeIframeAPIReady();
    });
</script>
</body>
</html>

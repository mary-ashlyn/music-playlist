<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop id="background-video">
            <source src="" type="video/mp4" id="videoSource" style="fill-opacity: 10%">
            Your browser does not support the video tag.
        </video>
    </div>

    <div id="root"></div>
    <div class="main-container" style="padding: 20px; padding-bottom: 0%; padding-top: 0px; margin-top: 0%; margin-bottom: 0%;">
        <div id="playlist-header">
            <table>
                <tr>
                    <td>
                        <img src="images/COJ.jpg">
                    </td>
                    <td>
                        <div class="playlist-header-text">
                            <span style="margin-left: 20px;">TINGIN ALBUM</span>
                            <h1 id="playlist-name" style="margin-left: 20px;">CUP OF JOE TOP MUSIC HITS</h1>
                            <p style="width:85%; margin-left: 20px;">
                                <b>2019 • 11 songs, 2 hrs •</b>
                            </p><br>
                            <button id="learn-more-button" style="margin-left: 910px; padding: 6px 6px; font-size: 14px; cursor: pointer; background-color: green; color: white;" onclick="learnMore()">About Cup Of Joe</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <audio id="audio" controls>
            <source id="audioSource" src=""></source>
        </audio>
        <br><br>

        <table id="song-table">
            <thead>
                <tr>
                    <td>#</td>
                    <td></td>
                    <td>Title</td>
                    <td>Singer</td>
                    <td>Album</td>
                    <td>Date Added</td>
                    <td>#</td>
                </tr>
            </thead>
            <tbody id="song-list">
            </tbody>
        </table>
        <br><br><br><br><br>

        <div class="controls-container">
            <input type="range" id="seekSlider" class="seek-slider" min="0" step="0.01" value="0" max="100" oninput="seekMusic(this.value)" style="width: 600px; margin-left: 445px; position: relative; top: -20px; height: 13px; border-radius: 8px;">
            <br>
            <span id="timer-current-time" style="display: inline-block; margin-left: 448px; position: relative; top: -60px; font-family: 'Poppins', sans-serif; font-weight: bold; color: white;">00:00</span>
            <span class="timer-text" style="display: inline-block; position: relative; top: -60px; font-family: 'Poppins', sans-serif; font-weight: bold; color: white;">/</span>
            <span id="timer-duration" style="display: inline-block; position: relative; top: -60px; font-family: 'Poppins', sans-serif; font-weight: bold; color: white;">00:00</span>
            <button class="audio-buttons" onclick="prev()" style="margin-left: 75px; margin-bottom: 10px; position: relative; top: -1px;">
                <i class="fa fa-backward"></i>
            </button>
            <button onclick="playPause()" class="audio-buttons" style="height: 50px;width: 50px;margin: 20px; position: relative; top: -1px;">
                <i id="play-button-icon" class="fa fa-play"></i>
            </button>
            <button class="audio-buttons" onclick="next()" style="position: relative; top: -1px;">
                <i class="fa fa-forward"></i>
            </button>
            <button class="audio-buttons shuffle" id="shuffle-button" onclick="shuffleMusic()" style="margin-left: -320px; margin-bottom: 30px; position: relative; top: -1px;">
                <i class="fa fa-random"></i>
            </button>
            <input type="range" id="volumeSlider" class="volume-slider" min="0" max="1" step="0.1" value="1" oninput="adjustVolume(this.value)">
            <i class="fa fa-volume-up volume-icon" id="volume-icon" onmouseover="showVolumeAdjustment()" onmouseout="hideVolumeAdjustment()"></i>
        </div>
    </div>

    <div class="copyright-container" style="color: gray;"><br><br>
                <p style="text-align: center; font-family: Sans-serif; font-size: 10px; margin-left: 70px;"><b>Copyright</b></p>
                <p style="text-align: center; font-family: Sans-serif; font-size: 10px; margin-left: 70px;"><b>All rights reserved.</b></p>
    </div>
    
    <script>
        function learnMore() {
            console.log("Learn More button clicked");
            window.location.replace("learn-more.php");
        }
    </script>
    <script src="js/script.js"></script>
    
</body>

</html>
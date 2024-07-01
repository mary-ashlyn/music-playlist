<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Learn More</title>
<style>
body {
    margin-bottom: 0px;
    padding-bottom: 0px;
    width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background-color: gray;
    overflow-x: hidden; 
}
table {
    width: 100%;
}

.custom-image {
  width: 400px;
  height: 300px;
  position: absolute;
  top: 131%;
  left: 16%;
  transform: translate(-50%, -50%);
  border-radius: 10%;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease;
}
.custom-image:hover {
 transform: scale(1.5);
}
.about-coj {
    backdrop-filter: blur(10px);
    background-color: rgba(211, 211, 211, 0.4); 
    border-radius: 15px;
    height: 290px;
    width: 100%;
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
    overflow-x: auto; 
    overflow-y: hidden;
}
.coj {
    margin-top: -330px;
    margin-bottom: 880px;
    margin-left: 30px;
    height: 190px;
    width: 210px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert {
    margin-top: -340px;
    margin-bottom: 890px;
    margin-left: 400px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-1 {
    margin-top: -249px;
    margin-bottom: 890px;
    margin-left: 940px;
    height: 202px;
    width: 252px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-2 {
    margin-top: -1200px;
    margin-bottom: 909px;
    margin-left: 1235px;
    margin-right: 100px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-3 {
    margin-top: -1300px;
    margin-bottom: 927px;
    margin-left: 1535px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-4 {
    margin-top: -1300px;
    margin-bottom: 946px;
    margin-left: 1829px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-5 {
    margin-top: -1300px;
    margin-bottom: 964px;
    margin-left: 2124px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-6 {
    margin-top: -1300px;
    margin-bottom: 983px;
    margin-left: 2419px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-7 {
    margin-top: -1300px;
    margin-bottom: 1002px;
    margin-left: 2713px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-8 {
    margin-top: -1300px;
    margin-bottom: 1020px;
    margin-left: 3010px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-9 {
    margin-top: -1300px;
    margin-bottom: 1039px;
    margin-left: 3308px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-10 {
    margin-top: -1300px;
    margin-bottom: 1058px;
    margin-left: 3605px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.concert-11 {
    margin-top: -1300px;
    margin-bottom: 1076px;
    margin-left: 3902px;
    height: 200px;
    width: 250px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
}
.custom1-image {
  width: 400px;
  height: 300px;
  position: absolute;
  top: 131%;
  left: 50.5%;
  transform: translate(-50%, -50%);
  border-radius: 10%;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease;
}
.custom1-image:hover {
  transform: scale(1.7);
  transform-origin: right;
}
.custom2-image {
  width: 400px;
  height: 300px;
  position: absolute;
  top: 131%;
  left: 85%;
  transform: translate(-50%, -50%);
  border-radius: 10%;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease;
}
.custom2-image:hover {
 transform: scale(1.7);
}
.custom3-image {
  width: 400px;
  height: 300px;
  position: absolute;
  top: 235%;
  left: 16%;
  transform: translate(-50%, -50%);
  border-radius: 10%;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease;
}
.custom3-image:hover {
  transform: scale(1.7);
  transform-origin: right;
}
.custom4-image {
  width: 400px;
  height: 300px;
  position: absolute;
  top: 235%;
  left: 50.5%;
  transform: translate(-50%, -50%);
  border-radius: 10%;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease;
}
.custom4-image:hover {
 transform: scale(1.7);
}
.custom5-image {
  width: 400px;
  height: 300px;
  position: absolute;
  top: 235%;
  left: 85%;
  transform: translate(-50%, -50%);
  border-radius: 10%;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease;
}
.custom5-image:hover {
  transform: scale(1.7);
  transform-origin: right;
}
.credits-container {
    background-color: lightgray;
    width: 100%;
    height: 50px;
}
.vertical-line {
        border-left: 1px solid #808080;
        height: 70%;
        position: absolute;
        left: 40%;
        top: 20%;

}
</style>
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
                            <br><span>TINGIN ALBUM</span>
                            <h1 id="playlist-name">CUP OF JOE TOP MUSIC HITS</h1>
                            <p style="width:85%;">
                            Hi people of Joewahs. We are Cup of Joe! A young pop/alternative band consists of Gian Bernardino (vocals), <br>
                            Raphael Ridao (vocals), Gabriel Fernandez (lead guitar), CJ Fernandez (rhythm guitar), Raphael “Sevi” Severino <br>
                            (bass), and Xen Gareza (keys). 
                            </p>
                            <br>
                                <button id="back-button" style="margin-left: 930px; padding: 5px 10px; font-size: 14px; cursor: pointer; background-color: green; color: white; margin-bottom: 8px;" onclick="backToPlaylist()">Back to playlist</button>
                            <br>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <br>
        <div class="about-coj">
        <br>
            <p style="text-align: center; font-family: Sans-serif; font-size: 15px; color: black; margin-left: 345px; margin-right: 700px; text-align: justify; font-size: 18px;"><b>FUN FACT</b></p>
            <p style="text-align: center; font-family: Sans-serif; font-size: 15px; color: black; margin-left: 270px; margin-right: 960px; text-align: justify; font-size: 15px;">The band’s unique name, Cup of Joe, is a slang word for a cup of coffee. And just like coffee, they wanted to produce different blends of music for people to listen to, especially when they need that refreshing boost to get through the day.</p><br><br><br><br><br><br><br>
            <img src='images/coj-image.png'  class="coj">
            <img src='images/seatbelts.jpg'  class="concert">
            <p style="text-align: center; font-family: Sans-serif; font-size: 15px; color: black; margin-left: 680px; margin-right: 500px; margin-top: -875px; text-align: justify; font-size: 15px;"><b>FIRST SOLO CONCERT</b></p>
            <div class="vertical-line"></div>
            <img src='images/misteryoso.jpg' class="concert-1">
            <img src='images/concert-2.jpg'  class="concert-2">
            <img src='images/concert-3.jpg'  class="concert-3">
            <img src='images/concert-4.jpg'  class="concert-4">
            <img src='images/concert-5.jpg'  class="concert-5">
            <img src='images/concert-6.jpg'  class="concert-6">
            <img src='images/concert-7.jpg'  class="concert-7">
            <img src='images/concert-8.jpg'  class="concert-8">
            <img src='images/concert-9.jpg'  class="concert-9">
            <img src='images/concert-10.jpg' class="concert-10">
            <img src='images/concert-11.jpg' class="concert-11">
        </div><br><br>
        <div class="members">
        <p style="text-align: center; font-size: 37px; color: #E8E8E8; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><b>CUP OF JOE BAND MEMBERS</b></p>
        </div>
        <br>
            <div class="gian-container" style="margin-left: 20px; color: black;">
            <p style="text-align: center; font-family: Sans-serif; margin-right: 950px; margin-left: -150px;  margin-top: 360px; font-size: 26px;"><b>Gian Bernardino</b></p>
            <p style="text-align: center; font-family: Sans-serif; margin-right: 900px; margin-left: -220px;  margin-top: 5px; font-size: 18px;"><b>(Vocalist)</b></p>
            <p style="text-align: justify; font-family: Sans-serif; margin-right: 1060px; margin-left: -10px;  margin-top: 28px; line-height: 1.4; font-size: 17px;"><b>Gian Bernardino is the bassist for the band Cup of Joe. Cup of Joe is a Filipino indie band known for their heartfelt and soulful music. The group has gained popularity in the local music scene with their unique sound and emotionally charged lyrics. Gian Bernardino, as the bassist, plays a crucial role in providing the rhythmic and harmonic foundation for the band's music.</b></p>
            </div>
            <img src='images/gian.png'  class="custom-image">

            <div class="rafa-container" style="margin-left: 50px; color: black;">
            <p style="text-align: center; font-family: Sans-serif; margin-right: 300px; margin-left: 253px;  margin-top: -310px; font-size: 26px;"><b>Raphaell Ridao</b></p>
            <p style="text-align: center; font-family: Sans-serif; margin-right: 300px; margin-left: 241px;  margin-top: 5px; font-size: 18px;"><b>(Vocalist)</b></p>
            <p style="text-align: justify; font-family: Sans-serif; margin-right: 530px; margin-left: 480px; margin-top: 26px;  line-height: 1.4; font-size: 17px;"><b>Raphaell Ridao, played by Jerome Ponce, is a key character in the Filipino BL series "Cup of Joe." He is a compassionate and charismatic young man who develops a romantic relationship with his best friend, Mark Lee. Raph's journey in the series explores the complexities of love and friendship, highlighting the nuances of same-sex relationships in contemporary Filipino media.</b></p><br>
                <br>
            </div>
            <img src='images/rafa.png'  class="custom1-image">
        </div>
            <div class="gab-container" style="margin-left: 50px; color: black;">
            <p style="text-align: center; font-family: Sans-serif; margin-right: 80px; margin-left: 1100px;  margin-top: -349px; font-size: 26px;"><b>Gabriel Fernandez</b></p>
            <p style="text-align: center; font-family: Sans-serif; margin-right: 80px; margin-left: 1095px;  margin-top: 5px; font-size: 18px;"><b>(Lead Guitarist)</b></p>
            <p style="text-align: justify; font-family: Sans-serif; margin-right: 50px; margin-left: 1025px; margin-top: 29px; line-height: 1.4; font-size: 17px;"><b>Gabriel Fernandez, played by Royce Cabrera, is a key character in the Filipino BL series "Cup of Joe." A confident and artistic barista, his story focuses on his evolving relationship with his roommate, Mark Lee, highlighting themes of love and identity against the vibrant backdrop of Manila. </b></p><br>
                <br>
            </div>
            <img src='images/gab.png'  class="custom2-image">
            <div class="cj-container" style="margin-left: 50px; color: black;">
            <p style="text-align: center; font-family: Sans-serif; margin-right: 950px; margin-left: -150px;  margin-top: 431px; font-size: 26px;"><b>CJ Fernandez</b></p>
            <p style="text-align: center; font-family: Sans-serif; margin-right: 900px; margin-left: -220px;  margin-top: 5px; font-size: 18px;"><b>(Guitarist)</b></p>
            <p style="text-align: justify; font-family: Sans-serif; margin-right: 1060px; margin-left: -10px;  margin-top: 28px; line-height: 1.4; font-size: 17px;"><b>CJ Fernandez is one of the guitarists for the Filipino band Cup of Joe. Originating from Baguio, Cup of Joe has gained significant popularity with their unique blend of pop and alternative music. The band has garnered millions of streams and a large following, both locally and internationally, thanks to hits like "Tingin," "Estranghero," and "Ikaw Pa Rin Ang Pipiliin Ko"​.</b></p><br>
                <br>
            </div>
            <img src='images/cj.jpg'  class="custom3-image">
            <div class="rap-container" style="margin-left: 50px; color: black;">
            <p style="text-align: center; font-family: Sans-serif; margin-right: 300px; margin-left: 260px;  margin-top: -347px; font-size: 26px;"><b>Raphael Severino</b></p>
            <p style="text-align: center; font-family: Sans-serif; margin-right: 300px; margin-left: 240px;  margin-top: 5px; font-size: 18px;"><b>(Bassist)</b></p>
            <p style="text-align: justify; font-family: Sans-serif; margin-right: 530px; margin-left: 480px; margin-top: 26px;  line-height: 1.4; font-size: 17px;"><b>Raphael “Sevi” Severino is the bassist for the Filipino band Cup of Joe. Alongside his bandmates, Sevi has contributed to the group's distinctive blend of pop and alternative music, which has garnered widespread popularity in the Philippines and beyond. The band, known for their hits like "Tingin," "Estranghero," and "Ikaw Pa Rin Ang Pipiliin Ko," has achieved millions of streams on platforms such as Spotify, reflecting their growing influence in the music scene​.</b></p><br>
                <br>
            </div>
            <img src='images/rap.jpg'  class="custom4-image">
            <div class="xen-container" style="margin-left: 50px; color: black;">
            <p style="text-align: center; font-family: Sans-serif; margin-right: 80px; margin-left: 1100px;  margin-top: -376px; font-size: 26px;"><b>Xen Gareza</b></p>
            <p style="text-align: center; font-family: Sans-serif; margin-right: 80px; margin-left: 1095px;  margin-top: 5px; font-size: 18px;"><b>(Keyboardist)</b></p>
            <p style="text-align: justify; font-family: Sans-serif; margin-right: 50px; margin-left: 1025px; margin-top: 29px; line-height: 1.4; font-size: 17px;"><b>Xen Gareza, portrayed by Genesis Redido in "Cup of Joe," is a central character valued for his cheerful support and camaraderie. Working as a barista, he offers emotional backing and comic relief to the main characters, emphasizing themes of friendship and acceptance in the series. Xen's warmth underscores the significance of genuine connections and community support in navigating life's complexities.</b></p><br>
                <br>
            </div>
            <img src='images/xen.png'  class="custom5-image">
    </div>
    <br><br><br><br>
            </div>
            <div class="credits-container" style="color: gray;"><br>
                <p style="text-align: left; font-family: Sans-serif; font-size: 17px; margin-left: 30px; margin-bottom: 10px; margin-top: -1px;"><b>BASILIO, MARY ASHLYN M.</b></p>
            </div>

    <script>
        function backToPlaylist() {
            console.log("Back to Playlist button clicked");
            window.location.replace("index.php"); 
        }
    </script>
</body>
</html>
var audio = document.getElementById('audio');
var isLooping = false;
var source = document.getElementById('audioSource');
var playToggle = false;
var activeMusic = 1;
var seekSlider = document.getElementById("seekSlider");
var volumeSlider = document.getElementById("volumeSlider");
var volumeAdjustment = document.getElementById("volumeAdjustment");
var backgroundVideo = document.getElementById('background-video');
var videoSource = backgroundVideo.querySelector('source');
const music = [

{
        id: 1,
        singer : "Cup of Joe",
        title: "Alos Dose",
        song : "music/Alas Dose (The Cozy Cove Live Sessions) - Cup of Joe.mp3",
        art: "https://lastfm.freetls.fastly.net/i/u/500x500/2181d9a6b9f68cf35692e631b724676b.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/alas-dose.mp4"
},
{
        id: 2,
        singer : "Cup of Joe",
        title: "Estranghero",
        song : "music/Estranghero (The Cozy Cove Live Sessions) - Cup of Joe.mp3",
        art: "https://lastfm.freetls.fastly.net/i/u/ar0/29996ae267d2eb0babc0bb9a5cd242a3.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/estranghero.mp4"
},
{
        id: 3,
        singer : "Cup of Joe",
        title: "Mananatili",
        song : "music/Mananatili (Live at The Cozy Cove) - Cup of Joe.mp3",
        art: "https://is1-ssl.mzstatic.com/image/thumb/Music126/v4/44/99/ea/4499eaed-b902-82d8-833e-b60acb2df710/cover.jpg/600x600bf-60.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/mananatili.mp4"
},
{
        id: 4,
        singer : "Cup of Joe",
        title: "Patutunguhan",
        song : "music/Patutunguhan (Live at The Cozy Cove) - Cup of Joe (1).mp3",
        art: "https://lastfm.freetls.fastly.net/i/u/ar0/16a2f9e14af4da074dee3bcc77ea082e.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/patutunguhan.mp4"
},
{
        id: 5,
        singer : "Cup of Joe",
        title: "Sinderela",
        song : "music/Sinderela (Live at The Cozy Cove) - Cup of Joe.mp3",
        art: "https://lastfm.freetls.fastly.net/i/u/ar0/8a52c94d15b20d48dce42febcb1dfb5d.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/sinderela.mp4"
},
{
        id: 6,
        singer : "Cup of Joe",
        title: "Tataya",
        song : "music/cup of Joe - Tataya (Live at 'Tataya Live' - The Cozy Cove).mp3",
        art: "https://is1-ssl.mzstatic.com/image/thumb/Music116/v4/13/27/44/1327444b-1b42-205d-1691-649f40fe77fa/cover.jpg/1200x1200bb.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/tataya.mp4"
},
{
        id : 7,
        singer : "Cup of Joe",
        title: "Tingin",
        song : "music/Tingin Reimagined (Live at The Cozy Cove) - Cup of Joe.mp3",
        art: "https://i.pinimg.com/originals/eb/d6/43/ebd643b30ffaf74b2f09a31d467df59f.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/tingin.mp4"

},
{
        id: 8,
        singer : "Cup of Joe",
        title: "Ikaw Pa Rin Ang Pipiliin",
        song : "music/Ikaw Pa Rin Ang Pipiliin Ko - Cup of Joe (Official Lyric Video Visualizer) (2).mp3",
        art: "https://i.scdn.co/image/ab67616d0000b273ae341dc1324284ac0c923607",
        album: "Tingin",
        date: "2019",
        video: "video_background/ikawparinangpipiliin.mp4"
},
{
        id: 9,
        singer : "Cup of Joe",
        title: "Nag-iisang Muli",
        song : "music/Cup of Joe - Nag-iisang Muli (Live at 'Tataya Live' - The Cozy Cove) (1).mp3",
        art: "https://lastfm.freetls.fastly.net/i/u/500x500/ac6af6327af62a792f87febd157e9217.jpg",
        album: "Tingin",
        date: "2019",
        video: "video_background/nagiisangmuli.mp4"
},
{
        id: 10,
        singer : "Cup of Joe",
        title: "Sagada",
        song : "music/Sagada (Live at The Cozy Cove) - Cup of Joe.mp3",
        art: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5UF5QR5f7lLnEs2WUSD2KPFa7yJ-HicvREECXo7wRcA&s",
        album: "Tingin",
        date: "2019",
        video: "video_background/sagada.mp4"
},
{
        id: 11,
        singer : "Cup of Joe",
        title: "Misteryoso",
        song : "music/Misteryoso - Cup of Joe (Official Lyric Video).mp3",
        art: "https://i.scdn.co/image/ab67616d0000b273802c8fee6eb6692b08b204a4",
        album: "Tingin",
        date: "2019",
        video: "video_background/misteryoso.mp4"
}];

        

for (var i = 0; i < music.length; i++) {
    console.log(`Adding track ${music[i].id} to the song list.`);
    document.getElementById('song-list').innerHTML +=
        `<tr class="tracks" id="track${music[i].id}" onClick="playMusic('${music[i].song}', '${music[i].id}', '${music[i].video}');">
            <td>${music[i].id}</td>
            <td>
                <img src="${music[i].art}" style="height:50px;width:auto;">
            </td>
            <td>${music[i].title}</td>
            <td>${music[i].singer}</td>
            <td>${music[i].album}</td>
            <td>${music[i].date}</td>
            <td>#</td>
        </tr>`;
}

function playMusic(src, id, videoSrc) {
    console.log("Playing music:", src);
    console.log("With video:", videoSrc);
  
    var audioSource = document.getElementById('audioSource');
    var audio = document.getElementById('audio');
    var video = document.getElementById('background-video');
    var videoSource = document.getElementById('videoSource');
    const videoContainer = document.getElementById('video-container');
  
    audioSource.src = src;
    audio.load();
    audio.play();
  
    var elements = document.getElementsByClassName('tracks');
  
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove("active");
        elements[i].style.color = "white"; 
    }
  
    activeMusic = id;
    playToggle = true;
    document.getElementById('track' + id).classList.add("active");
    document.getElementById('track' + id).style.color = "white"; 
    document.getElementById('track'+id).classList.add("active");
    document.getElementById('play-button-icon').classList.remove("fa-play");
    document.getElementById('play-button-icon').classList.add("fa-pause");

    videoSource.src = videoSrc;
    video.load();
    video.style.display = "block";
    videoContainer.style.backgroundColor = "transparent";
    video.play();
}

function playPause() {

    if(playToggle==true) {
        document.getElementById('play-button-icon').classList.remove("fa-pause");
        document.getElementById('play-button-icon').classList.add("fa-play");
        playToggle=false;
        audio.pause();
    }else{
        document.getElementById('play-button-icon').classList.remove("fa-play");
        document.getElementById('play-button-icon').classList.add("fa-pause");
        playToggle=true;
        audio.play();
        setInterval(updateSlider, 100);

    }
    }
    function next() {
        console.log("Current active music ID:", activeMusic);
        let nextMusicId = activeMusic + 1;
        console.log("Next music ID before check:", nextMusicId);
    
        // Ensure nextMusicId wraps correctly at the end of the playlist
        if (nextMusicId > music.length) {
            console.log("Reached the end of the playlist. Wrapping to the first song.");
            nextMusicId = 1; // Wrap around to the first song if at the end
        }
        
        activeMusic = nextMusicId;
        console.log("Next music ID after check:", nextMusicId);
        
        var gotMusic = getActiveMusic(nextMusicId);
        console.log("Playing next music:", gotMusic);
        
        playMusic(gotMusic.song, gotMusic.id, gotMusic.video);
    }
    
    function prev() {
        let prevMusicId = activeMusic - 1;
        if (prevMusicId < 1) {
            prevMusicId = music.length;
        }
        var gotMusic = getActiveMusic(prevMusicId);
        playMusic(gotMusic.song, gotMusic.id, gotMusic.video);
    }
    

function getActiveMusic(id){
    return music.find(track => track.id === id);
}
function seekMusic(value) {
    var seekTime = audio.duration * (value / 100);
    audio.currentTime = seekTime;
}

audio.addEventListener("timeupdate", updateSlider);

function updateSlider() {
    var value = (audio.currentTime / audio.duration) * 100;
    seekSlider.value = value;
    if (!isNaN(audio.duration)) {
        updateSongTimer();
    }
}
function updateSongTimer() {
    const currentTime = audio.currentTime;
    const duration = audio.duration;

    document.getElementById('timer-current-time').textContent = formatTime(currentTime);
    document.getElementById('timer-duration').textContent = formatTime(duration);
}

function formatTime(time) {
    const minutes = Math.floor(time / 60);
    const seconds = Math.floor(time % 60);
    return `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
}
function shuffleMusic() {
    const randomIndex = Math.floor(Math.random() * music.length);
    const randomSong = music[randomIndex];
    playMusic(randomSong.song, randomSong.id, randomSong.video);
}

function toggleLoop() {
    isLooping = !isLooping; // Toggle the looping state
    audio.loop = isLooping; // Set the audio element's loop property

    // Update the loop icon's active state
    if (isLooping) {
        loopIcon.classList.add('active');
    } else {
        loopIcon.classList.remove('active');
    }

    // Log the current state for debugging
    console.log("Looping state:", isLooping);
    console.log("Audio loop property:", audio.loop);
}
function adjustVolume(value) {
    audio.volume = value;
}
function showVolumeAdjustment() {
    volumeAdjustment.style.opacity = "1";
}
  
function hideVolumeAdjustment() {
    volumeAdjustment.style.opacity = "0";
}
loopButton.addEventListener('click', function() {
    console.log("Loop button clicked!");
    toggleLoop();
});
audio.addEventListener('timeupdate', () => {
    updateSlider();
    updateSongTimer();
});

audio.addEventListener('loadedmetadata', () => {
    updateSlider();
    if (!isNaN(audio.duration)) {
        updateSongTimer();
    }
});

seekSlider.addEventListener('input', (e) => {
    seekMusic(e.target.value);
    updateSongTimer();
});
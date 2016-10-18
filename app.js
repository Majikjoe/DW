/**
 * Created by Jonas on 2016-10-04.
 */


var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
        videoId: 'DdMtpHCZYU8',
        playerVars: {
            'autoplay': 1,
            'showinfo': 0,
            'controls': 0,
            'iv_load_policy': 3,
            'loop': 1,
            'modestbranding': 1,
            'playlist': 'DdMtpHCZYU8'
        },
        events: {
            'onReady': onPlayerReady
        }

    });
}

function onPlayerReady(event){
    player.mute();
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
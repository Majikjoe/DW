/**
 * Created by Jonas on 2016-10-04.
 */

$(document).ready(function(){
    $(".menu-link").hover(function() {
        $(this).css("color", "#0099ff");
    }, function() {
        $(this).css("color", "#595959");
    });
});


// Load the IFrame Player API code asynchronously.
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
            'playlist': 'DdMtpHCZYU8'
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    event.target.playVideo();
    player.mute();
}

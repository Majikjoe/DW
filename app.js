/**
 * Created by Jonas on 2016-10-04.
 */
/*
$(document).ready(function(){
    $(".menu-link").hover(function() {
        $(this).css("color", "#0099ff");
    }, function() {
        $(this).css("color", "#595959");
    });
});
*/

// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);





$(document).ready(function(){
    var scroll_pos = 0;
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 600) {

            $("header").css('background-color', '#060419');
            $(".header ul li a").css('color', 'white');
            $(".header h6").css('color', 'white');
            $(".header p").css('color', 'white');

            $(".menu-link").hover(function() {
                $(this).css("color", "#a6a6a6");
            }, function() {
                $(this).css("color", "white");
            });


        } else {
            $("header").css('background-color', 'white');
            $(".header ul li a").css('color', '#595959');
            $(".header h6").css('color', '#000');
            $(".header p").css('color', '#000');

            $(".menu-link").hover(function() {
                $(this).css("color", "#a6a6a6");
            }, function() {
                $(this).css("color", "#000");
            });


        }
    });
});


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


$('.mute-toggle').on('click', function() {
    var mute_toggle = $(this);

    if(player.isMuted()){
        player.unMute();
        mute_toggle.text('volume_up');
    }
    else{
        player.mute();
        mute_toggle.text('volume_off');
    }
});
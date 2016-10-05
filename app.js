/**
 * Created by Jonas on 2016-10-04.
 */

$(document).ready(function(){
    $(".menu-link").hover(function() {
        $(this).css("color", "gray");
    }, function() {
        $(this).css("color", "#595959");
    });
});

/**
 * Created by Jonas on 2016-10-04.
 */

$(document).ready(function(){
    $("a").hover(function() {
        $(this).css("color", "gray");
    }, function() {
        $(this).css("color", "#333333");
    });
});
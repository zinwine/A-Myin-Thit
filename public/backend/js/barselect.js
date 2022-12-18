/**
 * Created by Asus on 6/11/2017.
 */
$(document).ready(function () {
    $('#sidebar>ul>li').click(function () {
        $('.active').removeClass('active');
        $(this).addClass('active');
    })
});
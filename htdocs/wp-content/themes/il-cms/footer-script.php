<link rel="stylesheet" href="/common/css/drawer.css">
<script src="/common/js/drawer.min.js"></script>
<script src="/common/js/iscroll.js"></script>

<script type="text/javascript">
<?php if (is_mobile()) : ?>
$(document).ready(function() {
  $(".drawer").drawer();
});
<?php endif; ?>

$(function() {
    $('a[href^="#"]').click(function(){
        var href = $(this).attr('href');
        var target = $(href == '#' || href === '' ? 'html' : href);
        var position = target.offset().top;
        $('html,body').animate({scrollTop : position}, 500);
        return false;
    });
});


document.getElementById("view_time").innerHTML = getNow();
function getNow() {
    var now = new Date();
    var year = now.getFullYear();
    //出力用
    var s = year;
    return s;
}

</script>
<!-- jQuery -->
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.min.js"></script>

<!-- plugins -->
<script src="/js/plugins.js"></script>

<!-- custom scripts -->
<script src="/js/scripts.js"></script>

<script>
const d = new Date();
let year = d.getFullYear();
document.getElementById("demo").innerHTML = year;
</script>

<script>
// I know that the code could be better.
// If you have some tips or improvement, please let me know.

$('.img-parallax').each(function() {
    var img = $(this);
    var imgParent = $(this).parent();

    function parallaxImg() {
        var speed = img.data('speed');
        var imgY = imgParent.offset().top;
        var winY = $(this).scrollTop();
        var winH = $(this).height();
        var parentH = imgParent.innerHeight();
        // The next pixel to show on screen      
        var winBottom = winY + winH;

        // If block is shown on screen
        if (winBottom > imgY && winY < imgY + parentH) {
            // Number of pixels shown after block appear
            var imgBottom = ((winBottom - imgY) * speed);
            // Max number of pixels until block disappear
            var imgTop = winH + parentH;
            // Porcentage between start showing until disappearing
            var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 20));
        }
        img.css({
            top: imgPercent + '%',
            transform: 'translate(-50%, -' + imgPercent + '%)'
        });
    }
    $(document).on({
        scroll: function() {
            parallaxImg();
        },
        ready: function() {
            parallaxImg();
        }
    });
});
</script>
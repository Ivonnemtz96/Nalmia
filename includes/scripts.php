<!-- jQuery -->
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.min.js"></script>
<!-- plugins -->
<script src="/js/plugins.js"></script>
<!-- custom scripts -->
<script src="/js/scripts.js"></script>




<!-- Magnific Popup core JS file -->
<script src="/js/jquery.magnific-popup.js"></script>
<script>
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("demo").innerHTML = year;
</script>
<script>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
    integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
    data-cf-beacon='{"rayId":"81487889f974aa58","version":"2023.8.0","r":1,"b":1,"token":"125856bf84ab44059737e93b01aa0fef","si":100}'
    crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>Nalmia Developers</small>';
                }
            }
        });
    });
</script>
<script>
    const element = document.querySelector('.animate__fadeInUp');
    element.style.setProperty('--animate-duration', '7s');
</script>

<script>
        // Agrega el evento de scroll al objeto window
        $(window).scroll(function () {
            // Cierra el menú móvil si está abierto
            if ($("#navbarSupportedContent").hasClass("show")) {
                $("#menu-movil").click();
            }
        });
    </script>
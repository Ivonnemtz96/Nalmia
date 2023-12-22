<!-- jQuery -->
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.min.js"></script>
<!-- plugins -->
<script src="/js/plugins.js"></script>
<!-- custom scripts -->
<script src="/js/scripts.js"></script>


<script src="build/js/intlTelInput.js"></script>




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
$(window).scroll(function() {
    // Cierra el menú móvil si está abierto
    if ($("#navbarSupportedContent").hasClass("show")) {
        $("#menu-movil").click();
    }
});
</script>

<script src="https://1cf5229636340d3e1dd5-0eccc4d82b7628eccb93a74a572fd3ee.ssl.cf1.rackcdn.com/testing/intlTelInput.min.js"></script>
<script src="https://1cf5229636340d3e1dd5-0eccc4d82b7628eccb93a74a572fd3ee.ssl.cf1.rackcdn.com/testing/jquery.formatter.min.js"></script>
<script>
/*Requires:
intl-tel-input: https://github.com/jackocnr/intl-tel-input
formatter.js:  https://github.com/firstopinion/formatter.jsRequires:

Description:
Dropdown and Telephone input to handle international phone number entry. Default option is US but can be changed. Uses formatter js to add spacing, dashes and parentheses if needed while the user types. On selection of country in the dropdown the gray dial code box next to the telephone input is updated with the selected countries dial code. The formatter pattern is also updated on change. Validation is through intl-tel-inputs built in validator from googles libphonenumber. This is fully responsive and mobile optimized.

Test Numbers:
UK: +44 07400 123456 
JP: +81 070-1234-5678
DE: +49 01512 3456789
FR: +33 06 12 34 56 78
*/

const intlPhoneNumber = function(countryCode) {
    // get the country data from the plugin
    const countryData = $.fn.intlTelInput.getCountryData();
    const telInput = $("#phone_number");
    const telInputLabel = telInput.parents(".form-group").find("label");
    const countryDropdown = $("#phone-number-country");
    const phonePrefix = $('.phone_number_prefix');
    const fullPhoneNumber = $('#phone_number_full');
    const errorMsg = $("#error-msg");
    const initCountry = countryCode || 'us';
    let pattern = '';

   

    //set initial pattern for formatting
    if (initCountry === 'us') {
        pattern = '({{999}}) {{999}}-{{9999}}';
    } else {
        // using as temp until formatting on init figured out
        pattern = '{{9999999999999999999999}}';
    }

    // reset function to reset error state on validation
    const reset = function() {
        telInput.attr("placeholder", "xxx xxx xxxx");
        telInput.removeClass("has-error");
        telInputLabel.removeClass("has-error");
        errorMsg.addClass("hidden-xs-up");
    };

    // populate the country dropdown with intl-tel-input countries data
    $.each(countryData, function(i, country) {
        countryDropdown.append($("<option></option>").attr("value", country.iso2).text(country.name));
    });

    // init plugin for formatting placeholders
    telInput.intlTelInput({
        allowDropdown: false,
        initialCountry: initCountry,
        utilsScript: "https://1cf5229636340d3e1dd5-0eccc4d82b7628eccb93a74a572fd3ee.ssl.cf1.rackcdn.com/testing/utils.js"
    });

    // set dropdowns initial value
    const initialCountry = telInput.intlTelInput("getSelectedCountryData").iso2;
    let dialCode = telInput.intlTelInput("getSelectedCountryData").dialCode;
    countryDropdown.val(initialCountry);
    phonePrefix.text("+" + dialCode);

    // init format
    telInput.formatter({
        'pattern': pattern
    });

    // delete intl-tel-input items that aren't needed
    $('.flag-container').remove();
    $('.intl-tel-input').replaceWith(function() {
        return $('#phone_number', this);
    });

    // set placeholder
    telInput.attr("placeholder", "xxx xxx xxxx");

    // on blur: validate
    telInput.blur(function() {
        // reset states
        reset();

        if ($.trim(telInput.val())) {
            // if number is not valid
            if (telInput.intlTelInput("isValidNumber")) {
                // set hidden input to dial code + inputted number
                fullPhoneNumber.val(telInput.intlTelInput("getSelectedCountryData").dialCode + telInput
                .val());
            } else {
                // set error states
                telInput.addClass("has-error");
                telInputLabel.addClass("has-error");
                errorMsg.removeClass("hidden-xs-up");
                //clear hidden input val
                fullPhoneNumber.val("");
            }
        }
    });

    // on keyup / change flag: reset
    telInput.on("keyup change", reset);

    // listen to the country dropdown for changes.
    // updates placeholder and prefix when changed
    countryDropdown.change(function() {
        // Update Placeholder via plugin - so we can get the example number + format
        telInput.intlTelInput("setCountry", $(this).val());
        // Update Dial Code Prefix
        dialCode = telInput.intlTelInput("getSelectedCountryData").dialCode;
        phonePrefix.text("+" + dialCode);
        // Use updated placeholder to define formatting pattern
        pattern = telInput.attr("placeholder").replace(new RegExp("[0-9]", "g"), "9").replace(
            /([9]\d{0,10})/g, '{{$1}}');
        // update formatter
        telInput.formatter().resetPattern(pattern);
        // clear telephone input to prevent validation errors
        telInput.val("");
        // update placeholder to specific
        telInput.attr("placeholder", "PHONE NUMBER");
    });
};

// Testing for prepopulation. If country code not supplied: default = 'us'
// const initCountryCode = 'ca'; // uncomment to pass in as param
intlPhoneNumber();
</script>
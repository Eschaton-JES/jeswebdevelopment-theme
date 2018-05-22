
// bind .load() to each image when the DOM's ready
(function($) {
// You pass-in jQuery and then alias it with the $-sign
// So your internal code doesn't change
$(document).ready(function() {
// fade in each image individually as it's downloaded
$('img').load(function() {
    $(this).fadeIn('slow');
});
})(jQuery);
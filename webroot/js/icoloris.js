/* 
 * Lädt beliebige Datei vom Webserver und gibt sie in einer DIV-Box aus.
 */
function loadPage(address, targetframe) {
    $.ajax({
        type: "POST",
        url: address,
        beforeSend: function() {
            $('#' + targetframe).html(loadingImageTag);
        },
        data: {
        }
    }).done(function(msg) {
        $('#' + targetframe).html(msg);
    });
}
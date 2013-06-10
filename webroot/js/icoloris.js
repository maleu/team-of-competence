/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
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
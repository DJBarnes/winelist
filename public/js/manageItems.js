$(document).ready(function() {
    $.ajax({url: 'api/allItemNumbers'}).done(function(data) {
        $( "#itemNumber" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
                response( $.grep( data, function( item ){
                    return matcher.test( item );
                }) );
            }
        });
    });

    $.ajax({url: 'api/allItemDesc'}).done(function(data) {
        $( "#itemName" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
                response( $.grep( data, function( item ){
                    return matcher.test( item );
                }) );
            }
        });
    });

    $.ajax({url: 'api/allSlotLoc'}).done(function(data) {
        $( "#slotLocation" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
                response( $.grep( data, function( item ){
                    return matcher.test( item );
                }) );
            }
        });
    });

    $.ajax({url: 'api/allPackSize'}).done(function(data) {
        $( "#packSize" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
                response( $.grep( data, function( item ){
                    return matcher.test( item );
                }) );
            }
        });
    });

    $('#addnew').click(function(){
    	window.location.href="addnewitem";
    });

    //Success
    $('#message').fadeOut(2000);

    //Error
    $('#dismiss_error').click(function(){
        $('#error_message').hide();
    });

    $('tr[name=itemrow]').click(function(){
        $('#edititem_id').val(this.id);
        $('#edititem').submit();
    });

});//end of document.ready
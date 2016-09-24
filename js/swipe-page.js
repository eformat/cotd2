

$( document ).on( 'pageinit', "[data-role='page'].demo-page", function() {
    
    next = null;
    prev = null;
    rating = null;
    var page = "#" + $( this ).attr( "id" );

    next = $( this ).jqmData( "next" );    
    prev = $( this ).jqmData( "prev" );    
    rating = $( this ).jqmData( "rating" );

    if ( next != null ) {

        var favourite = $(this).attr("id");

        // alert("Page="+page+" Next="+next);

        $( document ).on( "swipeleft", page, function() {
            // pageContainer causing problems
            // $.mobile.pageContainer.pagecontainer('change', 'item.php?nextpage='+next, { transition: 'slide' });
            location.href= "item.php?nextpage="+next;
        });

        $( document ).on( "swiperight", page, "[data-role='page'].demo-page", function() {
            // $.mobile.pageContainer.pagecontainer('change', 'item.php?nextpage='+next, { transition: 'slide', reverse: 'true' });
            location.href= "item.php?nextpage="+prev;
        });

        $( ".control .next", page ).on( "click", function() {
            location.href= "item.php?nextpage="+next;
        });

        $( ".control .prev", page ).on( "click", function() {
            location.href= "item.php?nextpage="+prev;
        });

        $( ".control .like", page ).on( "click", function() {
            // alert("You have chosen " + favourite + " as a favourite with " + rating + " hearts.");            
            console.log("Favourite --> " + favourite + " with Rating -->" + rating);
            // $.mobile.pageContainer.pagecontainer('change', 'item.php?nextpage='+favourite+'&favorite='+favourite+'&rating='+rating, { transition: 'fade' });
            location.href= 'item.php?nextpage='+favourite+'&favorite='+favourite+'&rating='+rating;
        });

        $( ".control .hate", page ).on( "click", function() {
            rating = 0;
            // alert("You have chosen " + favourite + " as a favourite with " + rating + " hearts.");            
            console.log("Favourite --> " + favourite + " with Rating -->" + rating);
            // $.mobile.pageContainer.pagecontainer('change', 'item.php?nextpage='+favourite+'&favorite='+favourite+'&rating='+rating, { transition: 'fade' });
            location.href= 'item.php?nextpage='+favourite+'&favorite='+favourite+'&rating='+rating;
        });

    }

});

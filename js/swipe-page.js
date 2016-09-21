
$( document ).on( "pageinit", "[data-role='page'].demo-page", function() {
        var page = "#" + $( this ).attr( "id" ),

        // Get the filename of the next page that we stored in the data-next attribute
        next = $( this ).jqmData( "next" );
        // Get the filename of the previous page that we stored in the data-prev attribute
        prev = $( this ).jqmData( "prev" );

        // Prefetch the next page
        $.mobile.loadPage( "item.php?nextpage=" + next);
        $.mobile.loadPage( "item.php?nextpage=" + prev);

        // Navigate to next page on swipe left
        $( document ).on( "swipeleft", page, function() {
            // $.mobile.changePage( next + ".php", { transition: "slide" });
            //$.mobile.changePage( "item.php?nextpage=" + next, { transition: "slide", changeHash: "false", allowSamePageTransition: "true" });
            location.href= "item.php?nextpage="+next;
        });

        $( document ).on( "swiperight", page, function() {
            // $.mobile.changePage( next + ".php", { transition: "slide" });
            // $.mobile.changePage( "item.php?nextpage=" + prev, { transition: "slide", changeHash: "false", allowSamePageTransition: "true" });
            location.href= "item.php?nextpage="+prev;
        });

        var favourite = $(this).attr("id");
        //$( document ).on( "swiperight", page, function() {
        //    alert("You have chosen " + $(this).attr("id") + " as a favourite.");
        //    console.log("Favourite --> " + $(this).attr("id") );
        //    location.href= "item.php?nextpage="+favourite + "&favorite=" + favourite;
        //});

        // $( ".control .prev", page ).addClass( "ui-disabled" );
        // $( ".control .next", page ).addClass( "ui-disabled" );
        $( ".control .next", page ).on( "click", function() {
            // $.mobile.changePage( "item.php?nextpage=" + next, { transition: "slide", changeHash: "false", allowSamePageTransition: "true" });
            location.href= "item.php?nextpage="+next;
        });

        $( ".control .prev", page ).on( "click", function() {
            $.mobile.changePage( "item.php?nextpage=" + prev, { transition: "slide", changeHash: "false", allowSamePageTransition: "true" });
            location.href= "item.php?nextpage="+prev;
        });

        $( ".control .like", page ).on( "click", function() {
            alert("You have chosen " + favourite + " as a favourite.");
            console.log("Favourite --> " + favourite );
            location.href= "item.php?nextpage="+favourite + "&favorite=" + favourite;
        });

});

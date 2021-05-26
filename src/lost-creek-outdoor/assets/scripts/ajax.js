/* Ajax page loading script */

function loadPage(page,data){
    data = data || null;
    $.post(page,data,function(data){
        $("#content").html(data);
        scrollTo(top);
    })
}

function init(){
    //AJAX load some data
    //TODO: make it check the url for stuff we store.
    $.post( "home.php", function( data ) {
        $( "#content" ).html( data );
    });
}


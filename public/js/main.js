(function($) {

    $(document).ready(function(){
        $( ".garment" ).draggable({

            containment: "parent",

            stop: function(event, ui) {
                var pos = $(this).position();
                $(this).children('.x').first().val( pos.left );
                $(this).children('.x').first().attr('value', pos.left );

                $(this).children('.y').first().val( pos.top  );
                $(this).children('.y').first().attr('value', pos.top  );
            }
        });

    });

})( jQuery );

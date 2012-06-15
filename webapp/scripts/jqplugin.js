(function($) {
    $.fn.maxHeight = function() {

        var max = 0;

        this.each(function() {
            max = Math.max( max, $(this).height() );
        });

        return max;
    };

    $.fn.lockDimensions = function( type ) {

        return this.each(function() {

            var $this = $(this);

            if ( !type || type == 'width' ) {
                $this.width( $this.width() );
            }

            if ( !type || type == 'height' ) {
                $this.height( $this.height() );
            }

        });

    };
})(jQuery);
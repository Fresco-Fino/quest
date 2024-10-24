<?php

if(get_row_layout() == 'module__banner'):
    require( TEMPLATEPATH . '/template-parts/modules/banner/banner.php' );

elseif(get_row_layout() == 'module__form'):
    require( TEMPLATEPATH . '/template-parts/modules/form/form.php' );

elseif(get_row_layout() == 'module__gallery'):
    require( TEMPLATEPATH . '/template-parts/modules/gallery/gallery.php' );

elseif(get_row_layout() == 'module__icons'):
    require( TEMPLATEPATH . '/template-parts/modules/icons/icons.php' );

elseif(get_row_layout() == 'module__media'):
    require( TEMPLATEPATH . '/template-parts/modules/media/media.php' );

elseif(get_row_layout() == 'module__map'):
    require( TEMPLATEPATH . '/template-parts/modules/map/map.php' );

elseif(get_row_layout() == 'module__two-columns'):
    require( TEMPLATEPATH . '/template-parts/modules/two-columns/two-columns.php' );

endif;

?>
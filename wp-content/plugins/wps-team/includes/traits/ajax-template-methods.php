<?php

namespace WPSpeedo_Team;

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
trait AJAX_Template_Methods
{
    public function get_paging_type()
    {
        return false;
    }
    
    public function should_load_ajax_template()
    {
        return in_array( $this->get_paging_type(), [
            'pagination-ajax',
            'load-more-ajax',
            'infinite-scroll-ajax',
            'infinite-carousel-ajax'
        ] );
    }

}
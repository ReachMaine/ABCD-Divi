<?php /* Events */

add_filter( // Add serives default view to be list;
    'tec_events_pro_custom_tables_v1_series_event_view_slug',
    function ( $view ) {
        return 'list';
    }
);
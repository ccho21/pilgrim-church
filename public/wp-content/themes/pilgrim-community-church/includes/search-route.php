<?php

add_action('rest_api_init', 'pilgrimRegisterSearch');

function pilgrimRegisterSearch()
{
    register_rest_route('pilgrim-church/v1', 'search', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'pilgrimSearchResults'
    ));
}

function pilgrimSearchResults($data)
{
    $mainQuery = new  WP_Query(
        array(
            'post_type' => array('page', 'pastor', 'sermon', 'series', 'location', 'event'),
            's' => sanitize_text_field($data['term']),
        ));
    $result = array(
        'generalInfo' => array(),
        'pastors' => array(),
        'sermons' => array(),
        'series' => array(),
        'events' => array(),
    );
    while ($mainQuery->have_posts()) {
        $mainQuery->the_post();
        if (get_post_type() == 'page' OR get_post_type() == 'post') {
            array_push($result['generalInfo'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'postType' => get_post_type(),
                'authorName' => get_the_author(),
            ));
        }
        if (get_post_type() == 'sermon') {

            // GEt PREACHER STARTS
            $relatedPreacher = get_field('preacher');
            $preacherName = '';
            if ($relatedPreacher) {
                foreach ($relatedPreacher as $preacher) {
                    $preacherName = get_the_title($preacher);
                }
            }

            $relatedSeries = get_field_object('related_series');

            array_push($result['sermons'], array(
                'id' => get_the_id(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'preacher' => $preacherName,
                'related_series' => $relatedSeries,
            ));
        }

        if (get_post_type() == 'series') {
            array_push($result['series'], array(
                'id' => get_the_id(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'image' => get_the_post_thumbnail_url(0, 'post-thumbnails'),
            ));
        }
        if (get_post_type() == 'event') {
            $eventStart = new DateTime(get_field('event_start'));
            $eventEnd = new DateTime(get_field('event_end'));
            $description = null;
            if (has_excerpt()) {
                $description = get_the_excerpt();
            } else {
                $description = wp_trim_words(get_the_content(), 18);
            }
            array_push($result['events'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'event_start' => $eventStart->format('F j, g:i'),
                'event_end' => $eventEnd->format('F j, g:i'),
                'description' => $description,
            ));
        }
        if (get_post_type() == 'pastor') {
            array_push($result['pastors'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'position' => get_field('position'),
            ));
        }
    }
    wp_reset_query();
    wp_reset_postdata();

    $seriesMetaQuery = array('relation' => 'OR');
    if ($result['series']) {
        foreach ($result['series'] as $item) {
            array_push($seriesMetaQuery, array(
                'key' => 'related_series',
                'compare' => 'LIKE',
                'value' => '"' . $item['id'] . '"',
            ));
        }

//        when search Series, related sermon popup

        $seriesRelationshipQuery = new WP_Query(
            array(
                'post_type' => array('sermon'),
                'meta_query' => $seriesMetaQuery,
            ));
        while ($seriesRelationshipQuery->have_posts()) {
            $seriesRelationshipQuery->the_post();

            if (get_post_type() == 'sermon') {
                // GEt PREACHER STARTS
                $relatedPreacher = get_field('preacher');
                $preacherName = '';
                if ($relatedPreacher) {
                    foreach ($relatedPreacher as $preacher) {
                        $preacherName = get_the_title($preacher);
                    }
                }

                $relatedSeries = get_field_object('related_series');

                array_push($result['sermons'], array(
                    'id' => get_the_id(),
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink(),
                    'preacher' => $preacherName,
                    'related_series' => $relatedSeries,
                ));
            }
        }
    }

    $result['sermons'] = array_values(array_unique($result['sermons'], SORT_REGULAR));
    $result['series'] = array_values(array_unique($result['series'], SORT_REGULAR));
    return $result;
}



?>

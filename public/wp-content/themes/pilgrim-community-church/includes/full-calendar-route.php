<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/28/2018
 * Time: 5:35 PM
 */
?>

<?php
add_action('rest_api_init', 'pilgrimRegisterFullCalendar');

function pilgrimRegisterFullCalendar()
{
register_rest_route('pilgrim-church/v1', 'events', array(
'methods' => WP_REST_SERVER::READABLE,
'callback' => 'pilgrimChurchFullCalendar'
));
}

function pilgrimChurchFullCalendar ($data) {
    $mainQuery = new  WP_Query(
        array(
            'post_type' => 'event',
        ));
    $result = array(
        'events' => array(),
    );
    while($mainQuery->have_posts()) {
        $mainQuery->the_post();

        if(get_post_type()== 'event'){
            $eventStart = new DateTime(get_field('event_start'));
            $eventEnd = new DateTime(get_field('event_end'));
            if (has_excerpt()) {
                $description =  get_the_excerpt();
            } else {
                $description = wp_trim_words(get_the_content(), 18);
            }
            array_push($result['events'], array(
                'title' => get_the_title(),
                'start' => $eventStart->format('c'),
                'end' => $eventEnd->format('c'),
                'url' => get_the_permalink(),
            ));
        }
    }
    $result['events'] = array_values(array_unique($result['events'], SORT_REGULAR));
    return $result;
}


?>

import $ from 'jquery';
import 'fullcalendar';

class FullCalendar {
    constructor() {
        this.event();
        this.getResults();
    }
    event() {


    }
    // Methods
    getResults() {
        $.getJSON(pilgrimChurchData.root_url + '/wp-json/pilgrim-church/v1/events', (result) => {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                navLinks: true, // can click day/week names to navigate views
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                height: 'auto',
                events: result.events
            });
        });

    }
}


export default FullCalendar;
@extends('layouts.admin')
@section('content')

<div class="card bg-success bg-gradient">
    <div class="card-header">
        {{ trans('cruds.tasksCalendar.title') }}
    </div>

    <div class="card-body overflow-hidden">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />
        <style>
        .fc-unthemed td.fc-today {background: #dfbf15;}
        .fc-widget-header {background: #0d5c1f;}
        </style>
        <div id="calendar"></div>

    </div>
</div>



@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
@foreach($events as $event)
@if($event->due_date)
                            {
                                title : '{{ $event->name }}',
                                start : '{{ \Carbon\Carbon::createFromFormat(config('panel.date_format'),$event->due_date)->format('Y-m-d') }}',
                                url : '{{ url('admin/tasks').'/'.$event->id.'/' }}'
                            },
@endif
@endforeach
                ],
                color: 'yellow',
            })
        });
</script>

@stop

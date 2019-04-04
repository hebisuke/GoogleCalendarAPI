@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <form action="{{route('updateEvent',$event->id)}}" method="POST" role="form">
        {{csrf_field()}}
        <legend>
            Create Event
        </legend>
        <div class="form-group">
            <label for="title">
                Title
            </label>
            <input class="form-control" name="title" placeholder="Title" type="text" value="{{$event->summary}}">
        </div>
        <div class="form-group">
            <label for="description">
                Description
            </label>
            <input class="form-control" name="description" placeholder="Description" type="text" value="{{$event->description}}">
        </div>
        <div class="form-group">
            <label for="start_date">
                Start Date
            </label>
            <input class="form-control" name="start_date" placeholder="Start Date" type="text" value="{!!$event->start->dateTime!!}" >
        </div>
        <div class="form-group">
            <label for="end_date">
                End Date
            </label>
        <input class="form-control" name="end_date" placeholder="End Date" type="text" value="{!!$event->end->dateTime!!}" >
        </div>
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </form>
        </div>
    </div>
</div>
@endsection
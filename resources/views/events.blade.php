@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Events
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @forelse ($events as $event)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>{{ $events->summary }}</strong><br>
                                    <span class="text-muted">
                                            {{-- $event->start->dateTime ==null && $event->end->dateTime == null --}}
                                        @if ( ! $event->start->dateTime && ! $event->end->dateTime)
                                            {{ $event->start->date  }}
                                            (all day)
                                        @else
                                            Start:  {{ $event->start->dateTime }}<br/>
                                            End:    {{ $event->end->dateTime }}
                                        @endif
                                    </span>
                                </div>
                                <i  >
                                <span class="badge badge-pill"  style="background-color: @if(!($event->colorId == null)){{$colors[$event->colorId]->background}} @else{{$colors[1]->background}} @endif" >                                    
                                    {{ $event->getSummary() }}
                                </span>
                                <a href="updateEvent/{{$event->id}}">Sửa</a>
                                <a href="deleteEvent/{{$event->id}}">Xóa</a>
                            </i>
                            </li>
                        @empty
                            <li class="list-group-item">
                                No events.
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
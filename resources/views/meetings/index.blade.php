@extends('layouts.cpanel')

@section('buttons')
<div class="col-lg-6 col-5 text-right">
    <a href="{{route('meetings.create')}}" class="btn btn-sm btn-neutral">New</a>
  </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="mt-4">Meetings</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>title</th>
                            <th>Date</th>
                            <th>introdution</th>
                        </thead>
                        <tbody>
                            @forelse ($meetings as $meeting)
                            <tr>
                                <td>{{$meeting->title}}</td>
                                <td>{{$meeting->timestamp}}</td>
                                <td>{{$meeting->introduction}}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No meetings found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


  

@endsection
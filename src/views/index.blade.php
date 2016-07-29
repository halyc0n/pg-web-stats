@extends('pg-web-stats::layouts.master')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>query</th>
            <th>total_time</th>
            <th>average_time</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rows as $row)
            <tr>
                <td>{{$row->query}}</td>
                <td>{{$row->total_time}}</td>
                <td>{{$row->average_time}}</td>
            </tr>
        @endforeach
        <tr></tr>
        </tbody>
    </table>
@endsection
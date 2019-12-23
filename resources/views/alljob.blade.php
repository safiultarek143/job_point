@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <div class="well">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="bg-light">job List</h3>
                    </div>
                    <hr/>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="panel-body">
                        <table class="table tab-content">
                            <tr>
                                <th>Serial</th>
                                <th>title</th>
                                <th>company name</th>
                                <th>salary</th>
                                <th>publishing date</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($alljobs as $alljob)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $alljob->job_title }}</td>
                                    <td>{{ $alljob->company_Name}}</td>
                                    <td>{{ $alljob->salary }}</td>
                                    <td>{{ $alljob->created_at }}</td>
                                    <td>
                                        <a href="{{ route('view.job', $alljob->id) }}" class="btn btn-outline-primary">view Details</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

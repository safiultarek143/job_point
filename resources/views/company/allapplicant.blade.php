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
                                <th>Applicant name</th>
                                <th>Apply date</th>
                            </tr>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($applicants as $applicant)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $applicant->applicant->name }}</td>
                                    <td>{{ $applicant->created_at }}</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

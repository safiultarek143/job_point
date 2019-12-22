@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"class="align-middle">New job Post</div>
                    <h4 class="text-success">{{ Session::get('message') }}</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ route('store.job') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Job_title') }}</label>

                                <div class="col-md-6">
                                    <input id="Job_title" type="text" class="form-control @error('Job_title') is-invalid @enderror" name="job_title" value="{{ old('Job_title') }}" required autocomplete="Job_title">

                                    @error('Job_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Company_Name" class="col-md-4 col-form-label text-md-right">{{ __('Company_Name') }}</label>

                                <div class="col-md-6">
                                    <input id="Company_Name" type="text" class="form-control @error('Company_Name') is-invalid @enderror" name="company_Name" value="{{ old('Company_Name') }}" required autocomplete="Company Name" autofocus>

                                    @error('Company_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="JOb_Description" class="col-md-4 col-form-label text-md-right">{{ __('jOb_description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="jOb_description" type="text" class="form-control @error('jOb_description') is-invalid @enderror" name="jOb_description" required autocomplete="jOb_description"></textarea>
                                    @error('jOb_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="salary" class="col-md-4 col-form-label text-md-right">{{ __('salary') }}</label>

                                <div class="col-md-6">
                                    <input id="salary" type="text" class="form-control" name="salary" required autocomplete="salary">
                                    @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>

                                <div class="col-md-6">
                                    <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" required autocomplete="location">

                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('country') }}</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control" name="country" required autocomplete="country">
                                    @error('Country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ADD JOB') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

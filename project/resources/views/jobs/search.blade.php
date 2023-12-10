@extends('layouts.app')

@section('content')
    <section class="section-hero overlay inner-page" style="background-image: url('{{ asset('assets/images/bg.jpg') }}'); margin-top:-24px">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-dark font-weight-bold">Search Results</h1>
                    <div class="custom-breadcrumbs">
                        <a href="">Home</a> <span class="mx-2 slash"></span>
                        <a href="">Job</a> <span class="mx-2 slash"></span>
                        <span class="text-dark"> <strong>Search Results</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="text-center mb-5">
            <h1>Search Results</h1>
        </div>
        <ul class="job-listings mb-5">
            @if ($searchs->count() > 0)
                @foreach ($searchs as $job)
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <div class="job-listing-logo">
                        <img src="" alt="" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2><a href="{{ route('single.job', $job->id) }}" class="">{{ $job->job_title}}</a></h2>
                            <strong>{{ $job->company }}</strong>
                        </div>
                    </div>

                    <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                        <span class="icon-room"></span> {{ $job->job_region }}
                    </div>

                    <div class="job-listing-meta bg-danger">
                        <span class="badge">{{ $job->job_type }}</span>
                    </div>
                </li>
                @endforeach
            @else
            <div class="container">

                    <div class="alert alert-success">
                        <p>No jobs with this search just yet</p>
                    </div>

            </div>
            @endif

        </ul>
    </div>
@endsection
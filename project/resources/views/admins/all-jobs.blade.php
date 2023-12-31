@extends('layouts.admin')

@section('content')

<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                @if (\Session::has('create'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('create') }}</p>
                    </div>
                @endif

                @if (\Session::has('delete'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('delete') }}</p>
                    </div>
                @endif

                <h5 class="card-title mb-4 d-inline">Jobs</h5><hr>
                <a href="{{ route('create.jobs') }}" class="btn btn-primary mb-4 text-center float-right">Post Job</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Company</th>
                            <th scope="col">Job Region</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $jobs as $job )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $job-> job_title }}</td>
                                <td>{{ $job->category }}</td>
                                <td>{{ $job->company }}</td>
                                <td>{{ $job->job_region }}</td>
                                <td><a href="{{ route('delete.jobs', $job->id) }}" class="btn btn-danger text-center">delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
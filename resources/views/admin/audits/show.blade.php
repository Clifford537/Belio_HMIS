@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="text-center text-bold" style="text-transform: capitalize;">
                            Detailed Inspection of  trail <strong class="text-success">Entry#:</strong> <span class="text-success">{{ $audit->id }}</span>
                        </h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <!-- Constant Variables -->
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-center">Constant Variables</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Event:</strong> {{ $audit->event }}</li>
                            <li class="list-group-item"><strong>User:</strong> {{ $audit->user->name }}</li>
                            <li class="list-group-item"><strong>Date and Time:</strong> {{ $audit->created_at }}</li>
                            <li class="list-group-item"><strong>URL:</strong> {{ $audit->url }}</li>
                            <li class="list-group-item"><strong>IP Used:</strong> {{ $audit->ip_address }}</li>
                            <li class="list-group-item"><strong>Browser:</strong> {{ $audit->user_agent }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Changes -->
        <div class="row mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-title text-center">Entry Changes</h3>
                    </div>
                    <div class="card-body">
                        @foreach ($audit->getModified() as $attribute => $change)
                            <h4 class="text-success">{{ $attribute }}</h4>
                            @if (isset($change['old']))
                                @if (is_array($change['old']) && is_array($change['new']))
                                    <table class="table table-striped table-bordered" style="width: 100%">
                                        <thead>
                                        <tr>
                                            <th>Old Value</th>
                                            <th>New Value</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($change['old'] as $key => $value)
                                            <tr>
                                                <td>{{ $value }}</td>
                                                <td>{{ $change['new'][$key] ?? '' }}</td> <!-- Display new value or empty string if not set -->
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <table class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Old Value</th>
                                            <th>New Value</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ $change['old'] }}</td>
                                            <td>{{ $change['new'] ?? '' }}</td> <!-- Display new value or empty string if not set -->
                                        </tr>
                                        </tbody>
                                    </table>
                                @endif
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>All Airports</h1>
        <div class="my-4">
            <form action="" class="form-inline">
                <div class="form-group w-50">
                    <input type="text" id="search-airport" class="form-control w-100">
                    <label for="search-airport"></label>
                </div>
                <button class="btn btn-primary ml-1">Search</button>
            </form>

            <h5 class="mt-3">
                Page #{{ $airports->currentPage() }}
            </h5>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">City</th>
                <th class="w-25" scope="col">Country</th>
                <th scope="col">IATA</th>
                <th scope="col">ICIA</th>
                <th class="w-25" scope="col">Geo Coordinates</th>
                <th scope="col">Timezone</th>
                <th class="w-50"><button class="btn btn-primary">New Airport</button></th>
            </tr>
            </thead>
            <tbody>
            @foreach($airports as $airport)
                <tr>
                    <th scope="row">{{ $airport->id }}</th>
                    <td>{{ $airport->name }}</td>
                    <td>{{ $airport->city }}</td>
                    <td>{{ $airport->country }}</td>
                    <td>{{ $airport->iata }}</td>
                    <td>{{ $airport->icia }}</td>
                    <td>
                        <div>Latitude: {{ round($airport->latitude, 3) }}</div>
                        <div>Longitude: {{ round($airport->longitude, 3) }}</div>
                        <div>altitude: {{ round($airport->altitude, 3) }}</div>
                    </td>
                    <td>{{ $airport->timezone }}</td>
                    <td>
                        <button class="btn btn-primary">View</button> |
                        <button class="btn btn-secondary">Edit</button> |
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="row">
            {{ $airports->links() }}
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center flex-column">
        <h1 class="mb-4"><strong>Eagle Airlines</strong> Bookings</h1>

        <div class="w-50">

            {{--       Form 1 For Booking Details         --}}
            <form method="POST" action="/bookings">
                @csrf

                <div id="form1">
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"
                                   id="round-trip"
                                   name="trip_type"
                                   class="custom-control-input"
                                   checked
                            >
                            <label class="custom-control-label"
                                   for="round-trip"
                            >Round Trip</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"
                                   id="one-way"
                                   name="trip_type"
                                   class="custom-control-input"
                            >
                            <label class="custom-control-label"
                                   for="one-way"
                            >One Way</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"
                                   id="multi-city"
                                   name="trip_type"
                                   class="custom-control-input"
                            >
                            <label class="custom-control-label"
                                   for="multi-city"
                            >Multi City</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <input id="departure"
                               name="departure"
                               type="text"
                               class="@error('departure') is-invalid @enderror form-control">

                        @error('departure')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input id="destination"
                               name="destination"
                               type="text"
                               class="@error('destination') is-invalid @enderror form-control">

                        @error('destination')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input id="departure_date"
                               name="departure_date"
                               type="date"
                               class="@error('departure_date') is-invalid @enderror form-control">

                        @error('departure_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="return_date">Return Date</label>
                        <input id="return_date"
                               name="return_date"
                               type="date"
                               class="@error('return_date') is-invalid @enderror form-control">

                        @error('return_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"
                                   id="eco"
                                   name="trip_class"
                                   class="custom-control-input"
                                   checked
                            >
                            <label class="custom-control-label"
                                   for="eco"
                            >ECO</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"
                                   id="business"
                                   name="trip_class"
                                   class="custom-control-input">
                            <label class="custom-control-label"
                                   for="business"
                            >Business</label>
                        </div>
                    </div>
                    <button class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>
@endsection

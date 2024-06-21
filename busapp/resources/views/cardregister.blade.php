@extends('navbar')
@section('content')

<?php
/*require "dbconn.php";

if (isset($_POST["card_id"])) {   // rfid posted as a query
    $card_id = $_POST["card_id"];
    $std_id = $_POST["std_id"];
    $faculty = $_POST["faculty"];
    $gender = $_POST["gender"];
    $residential = $_POST["residential"];
     $sql = "INSERT INTO users (rfid_uid, name, gender, faculty, student_type) VALUES ('" . $card_id . "', '" . $std_id . "', '" . $gender . "', '" . $faculty . "', '" . $residential ."')";
    if ($conn->query($sql) === TRUE) ;

}*/

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('card-register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('CARD ID') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="card_id" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('STUDENT ID') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="std_id" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="faculty" class="col-md-4 col-form-label text-md-end">{{ __('FACULTY') }}</label>

                            <div class="col-md-6">
                                <input id="faculty" type="text" class="form-control" name="faculty" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="form-label col-md-4 col-form-label text-md-end">{{ __('GENDER') }}</label>
                            <div class="col-md-8"> <!-- Add a column for radio buttons -->
                                <div class="form-check form-check-inline"> <!-- Use form-check for proper spacing -->
                                    <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="male">
                                    <label class="form-check-label" for="maleRadio">MALE</label>
                                </div>
                                <div class="form-check form-check-inline"> <!-- Use form-check for proper spacing -->
                                    <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="female">
                                    <label class="form-check-label" for="femaleRadio">FEMALE</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="form-label col-md-4 col-form-label text-md-end">{{ __('RESIDENTIAL') }}</label>
                            <div class="col-md-8"> <!-- Add a column for radio buttons -->
                                <div class="form-check form-check-inline"> <!-- Use form-check for proper spacing -->
                                    <input class="form-check-input" type="radio" name="residential" id="residentRadio" value="resident">
                                    <label class="form-check-label" for="residentRadio">RESIDENT</label>
                                </div>
                                <div class="form-check form-check-inline"> <!-- Use form-check for proper spacing -->
                                    <input class="form-check-input" type="radio" name="residential" id="nonresidentRadio" value="nonresident">
                                    <label class="form-check-label" for="nonresidentRadio">NON-RESIDENT</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

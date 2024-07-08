<!-- resources/views/cardregister.blade.php -->
@extends('navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" style="color: green;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('cardregister.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="card_id" class="col-md-4 col-form-label text-md-end">{{ __('CARD ID') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="card_id" type="text" class="form-control @error('card_id') is-invalid @enderror" name="card_id" value="{{ old('card_id') }}" required autofocus>
                                    <button type="button" class="btn btn-primary" id="read-card-button">Read Card</button>
                                </div>
                                @error('card_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <script>
                        document.getElementById('read-card-button').addEventListener('click', function() {
                            fetch('http://172.20.10.3:5000/read-card-id')
                                .then(response => response.json())
                                .then(data => {
                                    document.getElementById('card_id').value = data.card_id;
                                })
                                .catch(error => console.error('Error:', error));
                        });
                        </script>


                        <div class="row mb-3">
                            <label for="std_id" class="col-md-4 col-form-label text-md-end">{{ __('STUDENT ID') }}</label>
                            <div class="col-md-6">
                                <input id="std_id" type="text" class="form-control @error('std_id') is-invalid @enderror" name="std_id" value="{{ old('std_id') }}" required>
                                @error('std_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="faculty" class="col-md-4 col-form-label text-md-end">{{ __('FACULTY') }}</label>
                            <div class="col-md-6">
                                <select id="faculty" class="form-control @error('faculty') is-invalid @enderror" name="faculty" required>
                                    <option value="" disabled selected>Select your faculty</option>
                                    <option value="Engineering">ENGINEERING</option>
                                    <option value="kppim">KPPIM</option>
                                    <option value="fsr">FSR</option>
                                    <option value="mascom">MASCOM</option>
                                    <option value="apb">APB</option>
                                </select>
                                @error('faculty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('GENDER') }}</label>
                            <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="male">
                                    <label class="form-check-label" for="maleRadio">{{ __('MALE') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="female">
                                    <label class="form-check-label" for="femaleRadio">{{ __('FEMALE') }}</label>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('RESIDENTIAL') }}</label>
                            <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="residential" id="residentRadio" value="resident">
                                    <label class="form-check-label" for="residentRadio">{{ __('RESIDENT') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="residential" id="nonresidentRadio" value="nonresident">
                                    <label class="form-check-label" for="nonresidentRadio">{{ __('NON-RESIDENT') }}</label>
                                @error('residential')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

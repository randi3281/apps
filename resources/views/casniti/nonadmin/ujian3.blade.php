@extends('casniti.master')

@section('judul_halaman', 'Ujian')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="row justify-content-center text-center" style="font-size: 20px; font-weight: lighter">
                    <div class="col-md-3" style="margin-bottom: -15px">
                        <p class="">Soal No: 1</p>
                    </div>
                    <div class="col-md-3" style="margin-bottom: -15px">
                    </div>
                    <div class="col-md-6 text-danger">
                        <p class="">Waktu Tersisa: 00:00:00</p>
                    </div>
                </div>
                <div class="card rounded-5" style="min-height: 370px">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <div class="" style="min-height: 260px">

                                    <p class="mt-3" style="font-size: 17px; font-weight: lighter">Indonesia memiliki
                                        semboyan "Bhinneka Tunggal Ika." Apa arti dari semboyan tersebut? </p>
                                    <form action="" style="font-size: 17px; font-weight: lighter">
                                        @csrf
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label d-inline" for="flexRadioDefault1">
                                                A. Berbeda-beda tetapi tetap satu
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label d-inline" for="flexRadioDefault2">
                                                B. Berbeda-beda tetapi tetap satu
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3">
                                            <label class="form-check-label d-inline" for="flexRadioDefault3">
                                                C. Berbeda-beda tetapi tetap satu
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4">
                                            <label class="form-check-label d-inline" for="flexRadioDefault4">
                                                D. Berbeda-beda tetapi tetap satu
                                            </label>
                                        </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col">
                                        <input type="submit" class="btn btn-primary mt-3 me-4 w-25 btn-success"
                                            value="< Previous">
                                        <input type="submit" class="btn btn-primary mt-3 me-4 w-25 btn-danger"
                                            value="Menyerah">
                                        <input type="submit" class="btn btn-primary mt-3 w-25 btn-success" value="Next >">
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row text-center">
                    @for ($i = 1; $i <= 110; $i++)
                        <div class="mb-2 col-1">
                            <a href="{{ url('/review/' . $i) }}"
                                class="btn btn-outline-primary p-1" style="width:40px">{{ $i }}</a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection

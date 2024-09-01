@extends('lebakbarangview.master')
@section('title', 'Pengaduan')
@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="widget widget-contact mb-5 mb-lg-0">
                <h4 class="text-capitalize mb-3 mt-5">Formulir Kontak</h4>
                <div class="divider mb-4"></div>

                <!-- Form Pengaduan -->
                <form action="{{ route('lebakbarang.kirim-pengaduan') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="pengaduan">Pengaduan:</label>
                        <textarea class="form-control" id="pengaduan" name="pengaduan" rows="4" required></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="send" name="send">
                </form>
                <!-- end form pengaduan -->
            </div>
        </div>
    </div>
</div>
@endsection

@extends('lebakbarangview.master')
@section('title', 'Demografi')
@section('content')
    <!-- START -->
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg">DEMOGRAFI</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section department-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="department-content mt-5">
                        <h3 class="text-md">Batas Wilayah Desa</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                            Letak Geografi Desa Lebakbarang, terletak diantara : <br><br> Sebelah Utara : Desa Mendolo<br>
                            Sebelah Selatan : Desa Sidomulyo <br> Sebelah Barat : Desa Kutorembet <br> Sebelah Timur : Desa
                            Bantarkulon, Desa Kapundutan<br><br>
                        </p>
                        <h3 class="text-md">Luas Wilayah Desa</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                            <!-- Tambahkan tabel disini -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">PERUNTUKAN</th>
                                    <th scope="col">LUAS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">A</th>
                                    <td colspan="2">TANAH SAWAH</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td>Irigasi Teknis</td>
                                    <td>0 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">2.</th>
                                    <td>Irigasi Setengah Teknis</td>
                                    <td>28,00 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">3.</th>
                                    <td>Irigasi Sederhana Non PU</td>
                                    <td>0 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">4.</th>
                                    <td>Tadah Hujan</td>
                                    <td>48,01 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">B</th>
                                    <td colspan="2">TANAH KERING</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td>Bangunan</td>
                                    <td>15,89 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">2.</th>
                                    <td>Tegalan/Kebun</td>
                                    <td>71,04 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">3.</th>
                                    <td>Penggembalaan</td>
                                    <td>0 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">4.</th>
                                    <td>Tambak</td>
                                    <td>0 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">5.</th>
                                    <td>Kolam</td>
                                    <td>2,1 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">6.</th>
                                    <td>Tanaman Kayu</td>
                                    <td>0 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">7.</th>
                                    <td>Hutan Negara</td>
                                    <td>208 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">8.</th>
                                    <td>Tidak diusahakan</td>
                                    <td>0 Ha</td>
                                </tr>
                                <tr>
                                    <th scope="row">9.</th>
                                    <td>Tanah lain</td>
                                    <td>0 Ha</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                        <h3 class="text-md">Orbitrasi</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                            Jarak ke ibu kota Kecamatan terdekat : 3,0 Km <br> Lama jarak tempuh ke ibu kota Kecamatan : 8
                            Menit <br> Jarak ke ibu kota Kabupaten : 13 KM <br> Lama jarak tempuh ke ibu kota Kabupaten : 30
                            Menit <br><br>
                        </p>
                        <h3 class="text-md">Jumlah Penduduk Berdasarkan Jenis Kelamin</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                            Kepala Keluarga : 703 KK <br> Laki-laki </table>: 1155 Orang <br> Perempuan : 1086 Orang <br>
                            Jumlah Penduduk : 2237 Orang <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
@endsection

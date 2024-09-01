@extends('casniti.master')

@section('judul_halaman', 'Filter Soal')

@section('menu')
    <li class="nav-item">
        <a class="nav-link mx-4" href="/casniti/upload">Upload Soal</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active mx-4" style="font-weight: bold">Filter Soal</a>
    </li>
@endsection

@section('konten')
    <div class="container">
        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center my-1">
                    Jenis Ujian:
                    <select name="ju" id="" class="dropdown rounded-5" style="width: 100px">
                        <option value="skd">SKD</option>
                        <option value="skb">SKB</option>
                    </select>
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm ms-2 rounded-5">
                </div>
                <div class="col-md-4 text-center my-1">
                    Kategori Soal:
                    <select name="ju" id="" class="dropdown  rounded-5" style="width: 85px">
                        <option value="semua">Semua</option>
                        <option value="tkp">TKP</option>
                        <option value="twk">TWK</option>
                        <option value="tiu">TIU</option>
                    </select>
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm ms-2 rounded-5">
                </div>
                <div class="col-md-4 text-center my-1">
                    <input type="input" placeholder="Cari..." class="rounded-5" style="width: 185px">
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm ms-2 rounded-5">
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered nowrap">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 5%; white-space: nowrap">No</th>
                                <th style="width: 20%; white-space: nowrap">Jenis Ujian</th>
                                <th style="width: 15%; white-space: nowrap">Kategori</th>
                                <th style="width: 35%; white-space: nowrap">Pertanyaan</th>
                                <th style="width: 25%; white-space: nowrap">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td style="width: 5%; white-space: nowrap">1</td>
                                <td style="width: 20%; white-space: nowrap">SKD</td>
                                <td style="width: 15%; white-space: nowrap">Semua</td>
                                <td style="width: 35%; white-space: nowrap">Halo apa kabar?</td>
                                <td style="width: 25%; white-space: nowrap">
                                    <a href="" class="btn btn-primary btn-sm fixed-size" name="edit">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm fixed-size" name="hapus">Hapus</a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td style="width: 5%; white-space: nowrap">2</td>
                                <td style="width: 20%; white-space: nowrap">SKD</td>
                                <td style="width: 15%; white-space: nowrap">Semua</td>
                                <td style="width: 35%; white-space: nowrap">Halo apa kabar?</td>
                                <td style="width: 25%; white-space: nowrap">
                                    <a href="" class="btn btn-primary btn-sm fixed-size" name="edit">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm fixed-size" name="hapus">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

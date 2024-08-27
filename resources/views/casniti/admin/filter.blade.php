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
                    <select name="ju" id="" class="dropdown rounded-5" style="width: 150px">
                        <option value="skd">SKD</option>
                        <option value="skb">SKB</option>
                    </select>
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm ms-2 rounded-5">
                </div>
                <div class="col-md-4 text-center my-1">
                    Kategori Soal:
                    <select name="ju" id="" class="dropdown  rounded-5" style="width: 150px">
                        <option value="semua">Semua</option>
                        <option value="tkp">TKP</option>
                        <option value="twk">TWK</option>
                        <option value="tiu">TIU</option>
                    </select>
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm ms-2 rounded-5">
                </div>
                <div class="col-md-4 text-center my-1">
                    <input type="input" placeholder="Cari..." class="rounded-5">
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm ms-2 rounded-5">
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th style="width: 30px">No</th>
                        <th style="width: 202px">Jenis Ujian</th>
                        <th style="width: 100px">Kategori</th>
                        <th style="width: 350px">Pertanyaan</th>
                        <th style="width: 200px">Keterangan</th>
                    </tr>
                    <tr class="text-center">
                        <td>1</td>
                        <td>SKD</td>
                        <td>Semua</td>
                        <td>Halo apa kabar?</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm w-25" name="edit">Edit</a>
                            <a href="" class="btn btn-danger btn-sm w-25" name="hapus">Hapus</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>1</td>
                        <td>SKD</td>
                        <td>Semua</td>
                        <td>Halo apa kabar?</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm w-25" name="edit">Edit</a>
                            <a href="" class="btn btn-danger btn-sm w-25" name="hapus">Hapus</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
@endsection

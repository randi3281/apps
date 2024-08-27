@extends('casniti.master')

@section('judul_halaman', 'History')

@section('menu')
    <li class="nav-item">
        <a class="nav-link active mx-4" href="/casniti/ujian">Ujian</a>
    </li>
    <li class="nav-item">
        <a class="nav-link mx-4 active" style="font-weight: bold">History</a>
    </li>
@endsection

@section('konten')
    <div class="text-center custom-font mt-1" style="font-size: 18px">
        <h4>History Ujian</h4>
    </div>
    <div class="container mt-4">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col" style="width: 2.5%;">No</th>
                    <th scope="col" style="width: 20%;">Tanggal</th>
                    <th scope="col" style="width: 12.5%;">Paket</th>
                    <th scope="col" style="width: 7.5%;">Jenis 1</th>
                    <th scope="col" style="width: 5%;">Nilai</th>
                    <th scope="col" style="width: 7.5%;">Jenis 2</th>
                    <th scope="col" style="width: 5%;">Nilai</th>
                    <th scope="col" style="width: 7.5%;">Jenis 3</th>
                    <th scope="col" style="width: 5%;">Nilai</th>
                    <th scope="col" style="width: 7.5%;">Jenis 4</th>
                    <th scope="col" style="width: 5%;">Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>25 Agustus 2024</td>
                    <td>Paket 1</td>
                    <td>TWK</td>
                    <td class="text-center">75</td>
                    <td>TIU</td>
                    <td class="text-center">80</td>
                    <td>TKP</td>
                    <td class="text-center">85</td>
                    <td>TBS</td>
                    <td class="text-center">78</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>20 Agustus 2024</td>
                    <td>Paket 2</td>
                    <td>TWK</td>
                    <td class="text-center">68</td>
                    <td>TIU</td>
                    <td class="text-center">75</td>
                    <td>TKP</td>
                    <td class="text-center">82</td>
                    <td>TBS</td>
                    <td class="text-center">76</td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>15 Agustus 2024</td>
                    <td>Paket 3</td>
                    <td>TWK</td>
                    <td class="text-center">70</td>
                    <td>TIU</td>
                    <td class="text-center">77</td>
                    <td>TKP</td>
                    <td class="text-center">88</td>
                    <td>TBS</td>
                    <td class="text-center">80</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

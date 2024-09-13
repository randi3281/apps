<div class="row">
    <div class="col-md-4">
        <?php
            if ($_SESSION['edit'] == 'iya') {
        ?>
        @include('aait.dashboard.admin.user_manajemen.edit')
        <?php
            } else {
        ?>
        @include('aait.dashboard.admin.user_manajemen.input')
        <?php
            }
        ?>
    </div>

    <div class="col-md-8">
        <div class="card mt-5">
            <h4 class="text-center mt-4">Manajemen User</h4>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table-1" style="min-width: 900px">
                        <thead class="custom-thead">
                            <tr>
                                <th class="text-center text-wrapped">No</th>
                                <th class="text-center text-wrapped">Nama</th>
                                <th class="text-center text-wrapped">NIK</th>
                                <th class="text-center text-wrapped">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datanya as $user)
                                <tr class="align-middle">
                                    <td class="text-center text-wrapped" style="height: 8px; font-size: 11pt">
                                        {{ $loop->iteration }}</td>
                                    <td class="text-wrapped text-center" style="height: 8px; font-size: 11pt">{{ $user->nama }}
                                    </td>
                                    <td class="text-wrapped text-center" style="height: 8px; font-size: 11pt">{{ $user->nik }}
                                    </td>
                                    <td class="text-wrapped text-center">
                                        <button class="btn btn-primary toggle-details">+</button>
                                        <a href="{{ route('aait.proses.admin.user_manajemen.edit', $user->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('aait.proses.admin.user_manajemen.delete', $user->id) }}"
                                            method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="details-row d-none">
                                    <td colspan="6">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th class="text-wrapped">Posisi</th>
                                                <td class="text-wrapped">{{ $user->posisi }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-wrapped">Area</th>
                                                <td class="text-wrapped">{{ $user->area }}</td>
                                            </tr>
                                            <!-- Tambahkan detail lain yang diperlukan di sini -->
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    {{ $datanya->links('pagination::bootstrap-4') }}
                </div>
            </div>


            <script>
                document.querySelectorAll('.toggle-details').forEach(function(button) {
                    button.addEventListener('click', function() {
                        var detailsRow = this.closest('tr').nextElementSibling;
                        detailsRow.classList.toggle('d-none');
                        this.textContent = detailsRow.classList.contains('d-none') ? '+' : '-';
                    });
                });
            </script>

        </div>
    </div>

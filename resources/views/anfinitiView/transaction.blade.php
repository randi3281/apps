<div class="row justify-content-center">
    <img src="/anfinitiPublic/logodark.png" class="mt-4 mb-3" style="width: 250px;" alt="">
    <div class="d-flex justify-content-center align-items-center" style="height:350px">
        <form style="width: 350px;" method="POST" action="/anfiniti/transactionprocess" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h5 class="text-center">Transaksi</h5>
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    {{-- buatlah detail transaksi mulai dari username, price, dan status, kemudian tambahkan tombol bayar --}}
                    <div class="form-group text-center">
                    <label for="username">Username: {{ $transaction->logintransaction->username }}</label> <br>
                    <label for="status">Status: {{$transaction->status}}</label><br>
                    <label for="price">Price: {{$transaction->price}}</label><br>
                    <div class="tombol text-center mt-5">
                        <a class="btn text-light btn-primary btn-block w-75" href="https://wa.me/6285930434857?text=Halo,%20saya%20berminat%20dengan%20promo%20Rp.%20100.000%20per%20tahun%20Anfiniti"
                            style="font-size: 9pt" value="Batal" name="tombolBatal">Pesan</a>
                        <a class="btn btn-outline-dark btn-block" href="{{Route('anfiniti')}}"
                            style="font-size: 9pt" value="Batal" name="tombolBatal">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>

<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
      // SnapToken acquired from previous step
      snap.pay('{{ $transaction->snap_token }}', {
        // Optional
        onSuccess: function(result){
          window.location.href = '{{ route('transactionSuccess') }}';
        },
        // Optional
        onPending: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onError: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
      });
    };
  </script>

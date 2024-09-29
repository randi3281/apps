<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

use App\Models\anfiniti_login;
use App\Models\anfiniti_session;
use App\Models\anfiniti_dataweb;
use App\Models\anfiniti_transaction;

class anfinitiTransaksiController extends Controller
{
    public function index()
    {
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');

        if ($dataEncryptednya) {
            $data = decrypt($dataEncryptednya);

            $tokennya = $data['tokennya'];
            $username = $data['username'];
            $login_id = $data['login_id'];

            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){

                    // Isinya
                    // ngecek statusnya apakah bukan common atau tidak
                    $transaction = anfiniti_transaction::where("login_id", $login_id)->first();
                    $posisi = anfiniti_login::where("id", $login_id)->first();

                    if(isset($transaction)){
                        if($posisi->posisi !== "common"){
                            return redirect()->route('anfiniti');
                        }else{
                            $transaction->delete();
                        }
                    }

                    //inputkan ke tabel transacation
                    $transaction = new anfiniti_transaction;
                    $transaction->login_id = $login_id;
                    $transaction->status = "pending";

                    // Set your Merchant Server Key
                    \Midtrans\Config::$serverKey = config('midtrans.serverKey');
                    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                    \Midtrans\Config::$isProduction = config('midtrans.isProduction');
                    // Set sanitization on (default)
                    \Midtrans\Config::$isSanitized = config('midtrans.isSanitazed');
                    // Set 3DS transaction for credit card to true
                    \Midtrans\Config::$is3ds = config('midtrans.is3ds');

                    $orderid = rand();
                    $price = 1000;
                    $params = array(
                        'transaction_details' => array(
                            'order_id' => $orderid,
                            'gross_amount' => $price,
                        ),
                        'customer_details' => array(
                            'first_name' => $posisi->username
                        )
                    );

                    $snapToken = \Midtrans\Snap::getSnapToken($params);

                    $transaction->price = $price;
                    $transaction->snap_token = $snapToken;
                    $transaction->order_id = $orderid;
                    $transaction->save();

                    return redirect()->route('tampilTransaksiAnfiniti');
                    // End Isinya


                }else{
                    return redirect()->route('anfiniti');
                };
            }else{
                return redirect()->route('anfiniti');
            }
        } else {
            return redirect()->route('anfiniti');
        }

    }

    public function transactionSuccess()
    {
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');

        if ($dataEncryptednya) {
            $data = decrypt($dataEncryptednya);

            $tokennya = $data['tokennya'];
            $username = $data['username'];
            $login_id = $data['login_id'];

            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){

                    // Isinya
                    // ngecek statusnya apakah bukan common atau tidak
                    $transaction = anfiniti_transaction::where("login_id", $login_id)->first();
                    $posisi = anfiniti_login::where("id", $login_id)->first();

                    if(isset($transaction)){
                        if($posisi->posisi !== "common"){
                            return redirect()->route('anfiniti');
                        }else{

                        // ubah status menjadi premium
                        $posisi->posisi = "premium";
                        $posisi->save();

                        // ubah status transaksi jadi sukses dan update tanggalnya
                        $transaction->status = "success";
                        $transaction->updated_at = now();
                        $transaction->save();

                        return redirect()->route('anfiniti');
                        }
                    }else{

                        return redirect()->route('anfiniti');
                    }
                    // End Isinya

                }else{
                    return redirect()->route('anfiniti');
                };
            }else{
                return redirect()->route('anfiniti');
            }
        } else {
            return redirect()->route('anfiniti');
        }

    }
}

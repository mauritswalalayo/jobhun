<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobhun Academy</title>
    <style>
        *{
            font-family: DejaVu Sans, sans-serif;
        }
        .kotaktengah{
            margin: 0 auto;
            background-color :white;
            width: 600px;
            padding: 20px;
        }
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 33%;
        }
        .pesankwitansi{
            margin: 21px;
            background-color :white;
            width: 600px;
            padding: 20px;
            line-height: 23px;
        }
        .right{
            display: block;
            margin-left: auto;
            width: 260px;
        }

        .rectangle {
            height: 50px;
            width: 600px;
            background-color: #66CDAA;
        }

        .ig{
            padding-top: 14px;
            margin-left: 46%;
            
        }


    </style>
</head>
<body bgcolor="#F7ECAC">
    <div class="kotaktengah">
        <div class="center">
        <img src="{{asset('user/images/jobhun.png')}}" width="180px" height="80px">
        </div>

        <div class="salam" style="text-align: justify; line-height: 23px;">
            <p>Hai, {{$name}}<br/>
                    Terima kasih telah mendaftar di Jobhun Academy. 
                    Kami lampirkan kwitansi pembayaran. Setelah ini kami 
                    akan mengundang kamu untuk bergabung di grup WhatsApp, 
                    terkait jadwal dan persiapan kelas. </p>
                    
                    <p>Salam, <br/>Tim Jobhun</p>
        </div>
        <hr>

        <div class="kwitansi">
                <div class="left">
                        <img src="{{asset('user/images/jobhun.png')}}" width="140px" height="60px">
                </div>
                <center>
                    <b><p>Kwitansi Pembayaran</p></b>
                    <p>No : {{$nomor_kwitansi}}</p>
                </center>

                <div class="box-body" style="text-align: justify">
                        <table class="pesankwitansi">
                                
                                    <tr>
                                        <td>Sudah diterima dari</td>
                                        <td>:</td>
                                        <td>{{$name}}</td>
                                    </tr>
                                    <tr>
                                        <td>No. Telp</td>
                                        <td>:</td>
                                        <td>{{$no_telp}}</td>
                                    </tr>
                                    <tr>
                                        <td>Untuk Pembayaran</td>
                                        <td>:</td>
                                        <td>Pelunasan {{$kelas}}</td>
                                    </tr>
                                
                        </table>
                </div>

                <div class="right" style="text-align: center">
                <b><p>Surabaya, {{$date}}</p></b>
                    <img src="{{asset('user/images/ttd.png')}}" width="160px" height="110px">
                            
                </div>
                <br>

                

            
        </div>
    </div>
    <div class="" style="text-align: center;">
        <p> Jobhun – CV. Sindikat Kreasi Digital<br/>
            Geco Coworking Space, Kompleks AJBS, Jl. Ratna 14, Ngagel, Wonokromo,<br/>
            Surabaya, Jawa Timur, Indonesia 60246<br/>
            Email. info@jobhun.id<br/>
            Phone. 08113235533
        </p>
    </div>
</body>

</html>
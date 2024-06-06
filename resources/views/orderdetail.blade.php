@extends('layouts.app')

@section('content')
<main>
<section
        class="hero"
        id="hero"
        style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 30vh;
          background-image: url('https://media.istockphoto.com/photos/selfie-of-girl-with-turtle-underwater-picture-id950473038?b=1&k=20&m=950473038&s=170667a&w=0&h=o60q1wOQMimHuch1T9KSwGFgehQpwPcxfKtiw0khhZ4=');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">
           Full Day
          </h1>

          <hr width="40" class="text-center" />
        </div>
      </section>
<section class="container why-us text-center">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('booking') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if($detailorder['servicetype']=='0')
<div class="form-group">
                        <!-- <label for="id">ID Order</label> -->
                        <!-- <input type="text" class="form-control" id="id" name="id" value="AGM-<?php echo uniqid();?>" disabled/> -->
                        <input type="hidden" class="form-control" id="id" name="id" value="AGM-<?php echo uniqid();?>"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="image">Phone Number/WA</label>
                        <input type="text" class="form-control" id="wa" name="wa" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required/>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control " id="price1" name="price1" value="{{ $car['price'] }}" disabled/>
                        <input type="hidden" class="form-control " id="price" name="price" value="{{ $car['price'] }}" />
                        <input type="hidden" class="form-control " id="car_id" name="car_id" value="{{ $car['id'] }}" />
                    </div>
                    <div class="form-group">
                        <label for="cartype">Car</label>
                        <input type="text" class="form-control" id="cartype1" name="cartype1" value="{{ $car['name'] }}" disabled/>
                        <input type="hidden" class="form-control" id="cartype" name="cartype" value="{{ $car['name'] }}" />
                    </div>
                    <div class="form-group">
                        <label for="image">Pick Up Date</label>
                        <input type="text" class="form-control" id="pickupdate1" name="pickupdate1" value="{{ $detailorder['pickupdate']}}" disabled/>
                        <input type="hidden" class="form-control" id="pickupdate" name="pickupdate" value="{{ $detailorder['pickupdate']}}"/>
                    </div>
                     <div class="form-group">
                        <label for="image">Pick Up Time (WITA)</label>
                        <input type="text" class="form-control" id="pickuptime1" name="pickuptime1" value="{{ $detailorder['pickuptime']}}" disabled/>
                        <input type="hidden" class="form-control" id="pickuptime" name="pickuptime" value="{{ $detailorder['pickuptime']}}" />
                    </div>
                    <div class="form-group">
                        <label for="image">PICK-UP</label>
                        <input type="text" class="form-control" id="location1" name="location1" value="{{ $detailorder['location']}}" disabled/>
                        <input type="hidden" class="form-control" id="location" name="location" value="{{ $detailorder['location']}}" />
                        <input type="hidden" class="form-control" id="goingto" name="goingto" value="{{ $detailorder['location']}}" />
                        <input type="hidden" class="form-control" id="servicetype" name="servicetype" value="{{ $detailorder['servicetype']}}" />
                    </div>
                    <div class="form-group">
                        <label for="buktitf">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control" id="buktitf" name="buktitf" required/>
                        
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="tnc1" name="tnc1" value="1">
                    <label for="tnc2">Syarat dan Ketentuan</label><br>
                    <p>Pelajari lebih lanjut terkait Syarat dan Ketetntaunnya </><a id="openpopup" style="color:blue;">klik disini</a>
                    </div>
                    <div id="popup-content" class="mfp-hide">
                        <h2>Syarat dan Ketentuan</h2>
                        <p>syarat dan ketentuan (Terms and Conditions / TNC) untuk pemesanan mobil: Penggunaan Mobil:</p>
                        <ol>
                            <li>Penggunaan Mobil:</li>
                                <ul>
                                    <li>Mobil hanya boleh digunakan oleh orang yang memiliki lisensi mengemudi yang sah.</li>
                                    <li>Pengguna harus mengikuti semua aturan lalu lintas yang berlaku dan mematuhi semua undang-undang setempat.</li>
                                    
                                </ul>
                            <li>Pembayaran:</li>
                                <ul>
                                    <li>Pembayaran harus dilakukan sebelum pengambilan mobil.</li>
                                    <li>Pembayaran dapat dilakukan melalui kartu kredit, transfer bank, atau metode pembayaran lain yang disetujui.</li>
                                    
                                </ul>
                            <li>Pengambilan dan Pengembalian:</li>
                                <ul>
                                    <li>Mobil harus diambil dan dikembalikan pada waktu yang telah ditentukan.</li>
                                    <li>Biaya tambahan mungkin berlaku untuk keterlambatan pengembalian mobil.</li>
                                    
                                </ul>
                            <li>Pemeliharaan Mobil:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Asuransi:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Pembatalan:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Penalty:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Kewajiban dan Tanggung Jawab:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Perjanjian Lain:</li>
                        </ol>
                    </div>
                    @elseif($detailorder['servicetype']== '1')
                        <div class="form-group">
                        <!-- <label for="id">ID Order</label> -->
                        <!-- <input type="text" class="form-control" id="id" name="id" value="AGM-<?php echo uniqid();?>" disabled/> -->
                        <input type="hidden" class="form-control" id="id" name="id" value="AGM-<?php echo uniqid();?>"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="image">Phone Number/WA</label>
                        <input type="text" class="form-control" id="wa" name="wa" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required/>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control " id="price1" name="price1" value="{{ $car['price'] }}" disabled/>
                        <input type="hidden" class="form-control " id="price" name="price" value="{{ $car['price'] }}" />
                        <input type="hidden" class="form-control " id="car_id" name="car_id" value="{{ $car['id'] }}" />
                    </div>
                    <div class="form-group">
                        <label for="cartype">Car</label>
                        <input type="text" class="form-control" id="cartype1" name="cartype1" value="{{ $car['name'] }}" disabled/>
                        <input type="hidden" class="form-control" id="cartype" name="cartype" value="{{ $car['name'] }}" />
                    </div>
                    <div class="form-group">
                        <label for="image">Pick Up Date</label>
                        <input type="text" class="form-control" id="pickupdate1" name="pickupdate1" value="{{ $detailorder['pickupdate']}}" disabled/>
                        <input type="hidden" class="form-control" id="pickupdate" name="pickupdate" value="{{ $detailorder['pickupdate']}}"/>
                    </div>
                     <div class="form-group">
                        <label for="image">Pick Up Time (WITA)</label>
                        <input type="text" class="form-control" id="pickuptime1" name="pickuptime1" value="{{ $detailorder['pickuptime']}}" disabled/>
                        <input type="hidden" class="form-control" id="pickuptime" name="pickuptime" value="{{ $detailorder['pickuptime']}}" />
                    </div>
                    <div class="form-group">
                        <label for="image">From To</label>
                        <input type="text" class="form-control" id="location1" name="location1" value="{{ $detailorder['location']}}" disabled/>
                        <input type="hidden" class="form-control" id="location" name="location" value="{{ $detailorder['location']}}" />
                    </div>
                    <div class="form-group">
                        <label for="image">Going To</label>
                        <input type="text" class="form-control" id="goingto1" name="goingto1" value="{{ $detailorder['goingto']}}" disabled/>
                        <input type="hidden" class="form-control" id="goingto" name="goingto" value="{{ $detailorder['goingto']}}" />
                        <input type="hidden" class="form-control" id="servicetype" name="servicetype" value="{{ $detailorder['servicetype']}}" />
                    </div>
                    <div class="form-group">
                        <label for="buktitf">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control" id="buktitf" name="buktitf" />
                        
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="tnc1" name="tnc1" value="1">
                    <label for="tnc2">Syarat dan Ketentuan</label><br>
                    <p>Pelajari lebih lanjut terkait Syarat dan Ketetntaunnya </><a id="openpopup" style="color:blue;">klik disini</a>
                    </div>
                    <div id="popup-content" class="mfp-hide">
                        <h2>Syarat dan Ketentuan</h2>
                        <p>syarat dan ketentuan (Terms and Conditions / TNC) untuk pemesanan mobil: Penggunaan Mobil:</p>
                        <ol>
                            <li>Penggunaan Mobil:</li>
                                <ul>
                                    <li>Mobil hanya boleh digunakan oleh orang yang memiliki lisensi mengemudi yang sah.</li>
                                    <li>Pengguna harus mengikuti semua aturan lalu lintas yang berlaku dan mematuhi semua undang-undang setempat.</li>
                                    
                                </ul>
                            <li>Pembayaran:</li>
                                <ul>
                                    <li>Pembayaran harus dilakukan sebelum pengambilan mobil.</li>
                                    <li>Pembayaran dapat dilakukan melalui kartu kredit, transfer bank, atau metode pembayaran lain yang disetujui.</li>
                                    
                                </ul>
                            <li>Pengambilan dan Pengembalian:</li>
                                <ul>
                                    <li>Mobil harus diambil dan dikembalikan pada waktu yang telah ditentukan.</li>
                                    <li>Biaya tambahan mungkin berlaku untuk keterlambatan pengembalian mobil.</li>
                                    
                                </ul>
                            <li>Pemeliharaan Mobil:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Asuransi:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Pembatalan:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Penalty:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Kewajiban dan Tanggung Jawab:</li>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    
                                </ul>
                            <li>Perjanjian Lain:</li>
                        </ol>
                    </div>
                    
                    @endif
                    
                    <button type="submit" id="submitBtn" class="btn btn-primary btn-block" disabled>Book</button>
                </form>
            </div>
        </div>

</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {
        $('#openpopup').magnificPopup({
            items: {
                src: '#popup-content'
            },
            type: 'inline'
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkbox = document.getElementById('tnc1');
        // var submitBtn = document.getElementById('submitBtn');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked ) {
                var submitBtn = document.getElementById('submitBtn');
                openpopup.addEventListener('click', function(event) {
                    event.preventDefault(); // Menghentikan tindakan default dari tag <a>
                    submitBtn.disabled = false; // Aktifkan tombol saat tag <a> ditekan
                 });
               
            } else {
                submitBtn.disabled = true; // Nonaktifkan tombol jika checkbox tidak diceklis
            }
        });
    });
</script>
</main>
@endsection
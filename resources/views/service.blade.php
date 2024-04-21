@extends('layout')

@section('title', 'Bayu Celluler | Service')

@section('content')
<main>
  <section class="serviceus mb-9rem">
    <div class="serviceus-image">
      <div class="image">
        <img src="{{ url('images/heroserviceimg.png') }}" alt="hero">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-5">
          <div class="serviceus-title">
            <h2 class="font-jakarta">Layanan Kami</h2>
            <p>Menerima segala permintaan service atau konsultasi hanya dari rumah kamu. Terpercaya dan cepat!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Part -->
  
  <section class="part">
    <div class="container">
      <div class="row">
        
          @if (isset($layanan))
            @foreach ($layanan as $item)
            <div class="col-xl-4">
                  <a href="{{ url("/servicedetail/$item->id_layanan") }}" class="text-decoration-none">
                    <div class="part-card">
                      <div class="image">
                        <img src="{{ url("https://admin.bayutirta.masuk.id/public/layanan/$item->foto") }}" onerror="this.src='images/service2.png'" alt="images/service2.png">
                      </div>
                      <div class="body">
                        <h5 class="title font-jakarta">{{$item->nama_layanan}}</h5>
                        <p class="text">{{$item->keterangan}}</p>
                      </div>
                      <div class="logo">
                        <div class="brand">
                          <img src="{{ url('images/xiaomi.png') }}" alt="brand">
                        </div>
                        <div class="brand">
                          <img src="{{ url('images/samsung.png') }}" alt="brand">
                        </div>
                        <div class="brand">
                          <img src="{{ url('images/oppo.png') }}" alt="brand">
                        </div>
                        <div class="brand">
                          <img src="{{ url('images/vivo.png') }}" alt="brand">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            @endforeach
        @else
            <div class="picture">
                <img src="/img/ALT 4.png" alt="noservice">
            </div>
            <div class="message text-center">
                <h3 class="fw-bold">Belum ada layanan yang dibuat</h3>
                <p>Buat dan atur layanan yang bisa diakses pelangganmu!</p>
                <p>Klik button “Tambah Layanan” di atas kanan halaman ini</p>
            </div>
        @endif
        
      </div>
    </div>
  </section>
  <!-- End : Part -->
</main>
@endsection
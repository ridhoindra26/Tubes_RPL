@extends('layout')

@section('title', 'Bayu Celluler | ServiceDetail')

@section('content')
<main>
    @if (Session::has('message'))
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Indicates a successful or positive action.
  </div>



  @endif
  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 align-self-center">
          <div class="hero-desc">
            <h1 class="font-jakarta">Service Handphone dalam Genggaman</h1>
            <p>Menerima segala permintaan service atau konsultasi hanya dari rumah kamu. Terpercaya dan cepat!</p>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="hero-image">
            <img src="{{ url('images/herosection.png') }}" alt="hero">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- Service -->
  <section class="service">
    <div class="container">
      <div class="service-wrapper">
        <div class="row">
          <div class="col-xl-7">
            <div class="row">
              <div class="col-xl-6">
                <div class="service-item">
                  <div class="icon">
                    <svg width="32" height="32" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M33 21.3636V17C33 8.16364 25.8364 1 17 1C8.16364 1 1 8.16364 1 17V21.3636"
                        stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M9.72727 21.3636H1V30.0909C1 31.6975 2.30255 33 3.90909 33H9.72727V21.3636Z"
                        fill="#D4D4D8" stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M33 21.3636H24.2727V33H30.0909C31.6974 33 33 31.6975 33 30.0909V21.3636Z"
                        fill="#D4D4D8" stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>

                  </div>
                  <div class="desc">
                    <h5 class="font-jakarta">Support</h5>
                    <p class="font-jakarta">Layanan support service bisa
                      diakses 24/7 dimanapun.</p>
                    <span class="font-jakarta"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M5.97942 5.71991C5.59787 6.10188 5.24802 6.57042 5.02182 6.97841C4.73771 7.47707 4.52797 8.02389 4.40152 8.59241L4.33572 8.93592C3.29871 14.1972 4.6157 18.9038 8.96325 23.2204C11.8158 26.0526 13.9788 27.2164 16.9406 27.6413C17.4205 27.7102 17.9218 27.7619 18.5183 27.8061L19.7446 27.8806C20.429 27.916 21.5693 27.9728 21.9586 27.995C22.4713 28.0242 23.1496 27.9261 24.0612 27.7126L24.1993 27.6721C24.9951 27.391 25.7217 26.9349 26.3301 26.3258C28.5566 24.0969 28.5566 20.4831 26.3301 18.2542L26.1318 18.0648C23.9795 16.1049 20.6882 16.087 18.5158 18.0207L18.2582 18.2538L16.8817 19.6318C16.5801 19.9337 16.1051 19.9746 15.7564 19.7287C15.0309 19.217 13.1032 17.3304 12.6327 16.6874C12.3769 16.3378 12.414 15.8537 12.7201 15.5474L13.9329 14.3341L14.0366 14.2497L14.1906 14.107C14.2184 14.0802 14.2467 14.0524 14.2748 14.0244C16.5655 11.7311 16.5655 8.01312 14.2748 5.71991C11.9841 3.4267 8.27012 3.4267 5.97942 5.71991ZM7.84006 7.58259C9.10315 6.31811 11.151 6.31811 12.4141 7.58259C13.6772 8.84707 13.6772 10.8972 12.4141 12.1617C12.336 12.2399 12.2546 12.3136 12.1701 12.3827L10.86 13.6843C9.63541 14.9097 9.48685 16.846 10.51 18.2442C11.1504 19.1192 13.2835 21.2069 14.2409 21.8822L14.4256 22.004C15.7998 22.8498 17.5882 22.6499 18.7424 21.4944L20.0149 20.2201L20.0323 20.2113L20.1549 20.0913C21.3559 18.9159 23.2803 18.9263 24.4695 20.1169C25.6684 21.3171 25.6684 23.2629 24.4695 24.4631L24.265 24.6505C24.0536 24.8276 23.822 24.9735 23.5753 25.0863L23.3762 25.1664L23.0379 25.2409L22.6807 25.3078C22.412 25.3528 22.2173 25.3712 22.1082 25.365L19.4364 25.2262L18.7286 25.1802L18.1146 25.1285C17.8268 25.1007 17.5647 25.0697 17.3138 25.0337C14.9428 24.6936 13.2858 23.802 10.8162 21.35C7.2278 17.7872 6.11555 14.1017 6.84874 9.81688L6.92544 9.40033C6.99495 8.9737 7.12368 8.60608 7.3151 8.27002C7.43164 8.05999 7.63432 7.78856 7.84006 7.58259Z"
                          fill="#D8DCDF" />
                      </svg>
                      310-437-2766
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="service-item">
                  <div class="icon">
                    <svg width="32" height="32" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M33 1H1V33H33V1Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M14.6 5.80005H5.80005V16.2H14.6V5.80005Z" stroke="#161616" stroke-width="2"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M14.6 21H5.80005V28.2H14.6V21Z" stroke="#161616" stroke-width="2"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M28.1999 5.80005H19.3999V28.2H28.1999V5.80005Z" fill="#D4D4D8" stroke="#161616"
                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                  </div>
                  <div class="desc">
                    <h5 class="font-jakarta">Lokasi</h5>
                    <p class="font-jakarta">Hadir dengan akses terdekat
                      untuk warga Jawa Timur</p>
                    <span class="font-jakarta">
                      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M16.0001 5.33329C12.3182 5.33329 9.33341 8.31806 9.33341 12C9.33341 15.7172 11.4823 21.1564 16.0001 26.0737C20.5178 21.1564 22.6667 15.7172 22.6667 12C22.6667 8.31806 19.682 5.33329 16.0001 5.33329ZM6.66675 12C6.66675 6.8453 10.8454 2.66663 16.0001 2.66663C21.1547 2.66663 25.3334 6.8453 25.3334 12C25.3334 16.8696 22.4475 23.4382 16.9429 28.9428C16.4222 29.4635 15.578 29.4635 15.0573 28.9428C9.55267 23.4382 6.66675 16.8696 6.66675 12Z"
                          fill="#D8DCDF" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M16.0001 13.3333C16.7365 13.3333 17.3334 12.7363 17.3334 12C17.3334 11.2636 16.7365 10.6666 16.0001 10.6666C15.2637 10.6666 14.6667 11.2636 14.6667 12C14.6667 12.7363 15.2637 13.3333 16.0001 13.3333ZM16.0001 16C18.2092 16 20.0001 14.2091 20.0001 12C20.0001 9.79082 18.2092 7.99996 16.0001 7.99996C13.7909 7.99996 12.0001 9.79082 12.0001 12C12.0001 14.2091 13.7909 16 16.0001 16Z"
                          fill="#D8DCDF" />
                      </svg>
                      <a href="https://maps.app.goo.gl/i394faRGP1Db1d6Q7">Google Maps</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5">
            <div class="service-desc">
              <div class="title">
                <h5 class="font-jakarta">Reservasi Gratis</h5>
                <p class="font-jakarta">Gratis Diagnosa, konsultasi & reservasi dengan dukungan
                  pesan foto.</p>
              </div>
              <button><a class="button-link text-decoration-none text-light" aria-current="page" href="#consultation">Reservasi Sekarang</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End : Service -->
  <!-- consultation -->
  <div class="consultation" id="consultation">
    <div class="container">
      <div class="row justify-content-lg-between">
        <div class="col-xl-5">
          <div class="consultation-title">
            <h2 class="font-jakarta">Perbaiki Handphonemu dengan Reservasi layanan!</h2>
          </div>
          <div class="consultation-image">
            <img src="{{ url('images/form.png') }}" alt="phone">
          </div>
        </div>
        <div class="col-xl-6">
          <form action="/reservasi" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="consultation-form">
            <div class="form">
              <label for="name">Nama <span>*</span></label>
              <div class="input">
                <input type="text" name="name" placeholder="Masukkan nama kamu">
              </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Nomor WhatsApp <span>*</span></label>
              <div class="input">
                <input type="text" name="no_telp" placeholder="Masukkan nomor whatsapp kamu">
              </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Alamat <span>*</span></label>
              <div class="input">
                <input type="text" name="alamat" placeholder="Masukkan alamat rumah kamu">
              </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Layanan <span>*</span></label>
                <div class="dropdown">
                  {{-- <button class="btn btn-outline-info dropdown-toggle w-100 mt-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Layanan
                  </button> --}}
                  <select class="form-select" name="layanan" aria-label="Default select example">
                    <option selected>Pilih Layanan</option>
                    @foreach ($pilihan as $item)
                    <option value="{{$item->nama_layanan}}">{{$item->nama_layanan}}</option>
                    @endforeach
                  </select>
                  {{-- <ul class="dropdown-menu">

                    <li>{{$item->nama_layanan}}</li>

                  </ul> --}}
                </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Merk HP <span>*</span></label>
              <div class="input">
                <input type="text" name="merk_hp" placeholder="Tulis merk HP kamu">
              </div>
            </div>
            <div class="form mt-xl-4">
              <label for="name">Deskripsikan Kasus <span>*</span></label>
              <div class="input">
                <textarea name="keterangan" id="" cols="10" rows="5" placeholder="Ceritakan keluhan Handphone"></textarea>
              </div>
            </div>
            <div class="form-file mt-xl-4">
              <label for="name">Upload foto / video pendukung <span>*</span></label>
              <div class="box">
                <input type="file" name="foto" id="file-5" class="inputfile inputfile-4"
                  data-multiple-caption="{count} files selected" multiple />
                <label for="file-5">
                  <figure class="text-xl-center"><img src="{{ url('images/copas.png') }}" alt=""></figure>
                  <p>Tarik file kesini atau <span>cari di file</span></p>

                </label>
              </div>
            </div>
            <div class="button-form">
              <button>Kirim</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End : consultation -->
</main>

@endsection

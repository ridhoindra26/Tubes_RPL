@extends('main')
@section('content')
<div class="artikel">
    <div class="titleWarp">
        <div class="artikelTitle">Ulasan</div>
    </div>
    <div class="card-list-ulasan">
        <h5>Ulasan Pelanggan</h5>
        @if (isset($ulasan) AND count($ulasan)>0)
        @foreach ($ulasan as $item)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-auto">
                        <h5>{{$item->author_name}}</h5>
                    </div>
                    <div class="col-md-3 ms-auto reserve">
                        <span class="badge text-bg-warning" >
                            <ion-icon name="star"></ion-icon>
                            {{$item->rating}}
                        </span>
                    </div>
                </div>
                <p>{{date("Y-m-d",$item->time)}}</p>
                <p>{{$item->text}}<p>
            </div>
        </div>
        @endforeach
        @else
        <div class="katalog">
            <div class="picture">
                <img src="/img/ALT 4.png" alt="noservice">
            </div>
            <div class="message text-center">
                <h3 class="fw-bold">Belum ada Ulasan yang dibuat</h3>
                <p>Pastikan halaman ini sudah tersambung dengan ulasan Google Maps</p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

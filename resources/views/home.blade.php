@extends('master.app')

@section('content')
    @include('partials.navbar')
    <div class="jumbotron jumbotron-fluid" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 d-flex justify-content-center order-lg-1 mb-5">
            <img class="img-fluid" src="{{ asset('image/logo.png') }}" alt="Logo Kode Aceh">
          </div>
          <div class="col-lg-9 order-lg-0">
            <h1 class="display-4 m-0">Komunitas Developer Aceh</h1>
            <p class="lead">Learn, Teach, and Grow Together</p>
            <p class="lead">Komunitas Developer Aceh adalah komunitas berbasis di Aceh untuk mewadahi para pengantusias, pelajar, dan professional di kalangan IT untuk belajar, mengajar, dan berkembang bersama-sama. Komunitas ini dibangun untuk menjawab kebutuhan SDM (Sumber Daya Manusia) Aceh untuk menuju Banda Aceh Smart City. Dengan bergabung komunitas ini, para anggota dapat bersama-sama mengerjakan projek yang dapat menyelesaikan permasalahan di Aceh dengan pendekatan teknologi.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="event">
      <p class="font-primary display-4 my-4">Event</p>
      <div class="row">
        @foreach ($events as $key => $value)
          <div class="col-md-4 mb-4">
            <div class="card card-custom bg-white border-white border-0">
              <div class="card-custom-img custom-{{ $value->color }}"></div>
              <div class="card-custom-avatar">
                <img class="img-fluid" src="{{ asset('logo/'.$value->image) }}" alt="Avatar" />
              </div>
              <div class="card-body" style="overflow-y: auto">
                <h4 class="card-title">{{ $value->name }}</h4>
                <p class="card-text mb-2">{{ $value->description }}</p>
                <ul class="fa-ul ml-4 mb-0">
                  <li><i class="fa-li fa fa-user fa-lg"></i>{{ $value->tutor }}</li>
                  <li><i class="fa-li fa fa-calendar-o fa-lg"></i>{{ $value->date }}</li>
                </ul>
              </div>
              <div class="card-footer" style="background: inherit; border-color: inherit;">

                <a href="{{ $value->registration_link }}" class="btn btn-primary {{ $value->registration_link ? '' : 'disabled' }}" target="_blank">
                  {{ $value->registration_link ? 'Registrasi' : 'Belum Tersedia' }}
                </a>
                <a href="{{ route('event', $value->slug) }}" class="btn btn-outline-primary">Detail</a><br>
                <small class="text-danger">Deadline: {{ $value->deadline }}</small>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <p class="font-primary display-4 mb-4">Event Sebelumnya</p>
      <div class="row">
        @foreach ($prev_events as $key => $value)
          <div class="col-md-4 mb-4">
            <div class="card card-custom bg-white border-white border-0">
              <div class="card-custom-img custom-{{ $value->color }}"></div>
              <div class="card-custom-avatar">
                <img class="img-fluid" src="{{ asset('logo/'.$value->image) }}" alt="Avatar" />
              </div>
              <div class="card-body" style="overflow-y: auto">
                <h4 class="card-title">{{ $value->name }}</h4>
                <p class="card-text mb-2">{{ $value->description }}</p>
                <ul class="fa-ul ml-4 mb-0">
                  <li><i class="fa-li fa fa-user fa-lg"></i>{{ $value->tutor }}</li>
                  <li><i class="fa-li fa fa-calendar-o fa-lg"></i>{{ $value->date }}</li>
                </ul>
              </div>
              <div class="card-footer" style="background: inherit; border-color: inherit;">
                <a href="{{ route('event', $value->slug) }}" class="btn btn-outline-primary">Detail</a><br>
                <small class="text-danger">Deadline: {{ $value->deadline }}</small>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="jumbotron jumbotron-fluid" id="kalender">
      <div class="container">
        <p class="font-primary display-4 m-0">Kalender</p>
        <div class="row">
          <div class="col-md-8">
            <p class="lead mb-4">Dengan Google Calender, kamu dapat menambahkan kalender kegiatan Kode Aceh ke kalender kamu dan mendapatkan informasi dan notifikasi kegiatan ter-uptodate dari Kode Aceh.</p>
          </div>
          <div class="col-md-4">
            <a href="https://calendar.google.com/calendar/embed?src=83g9gtk926an4n73l6ca9gq8fk%40group.calendar.google.com&ctz=Asia%2FJakarta" data-toggle="tooltip" data-placement="top" title="Lihat Kalender" target="_blank">
              <div class="card-btn shadow-sm p-3 bg-white rounded-sm mr-4" >
                <img src="{{ asset('image/icon-cal.png') }}" alt="icon calendar">
                <div class="icon-sm rounded-circle shadow-sm">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
              </div>
            </a>
            <a href="https://calendar.google.com/calendar/b/2?cid=ODNnOWd0azkyNmFuNG43M2w2Y2E5Z3E4ZmtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" data-toggle="tooltip" data-placement="top" title="Tambahkan Kalender" target="_blank">
              <div class="card-btn shadow-sm p-3 bg-white rounded-sm" >
                <img src="{{ asset('image/icon-cal.png') }}" alt="icon calendar">
                <div class="icon-sm rounded-circle shadow-sm">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection

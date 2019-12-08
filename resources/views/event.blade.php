@extends('master.app')

@section('content')
    @include('partials.navbar-alt')
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 d-flex justify-content-center order-lg-1 mb-5">
            <div class="event-logo">
              <img class="img-fluid" src="{{ asset('logo/'.$data->image) }}" alt="Logo" />
            </div>
          </div>
          <div class="col-lg-9 order-lg-0">
            <h1 class="m-0">{{ $data->name }}</h1>
            <p class="lead">{{ $data->description }}</p>
            <div class="row mb-3">
              <div class="col-md-6">
                <ul class="fa-ul ml-4 mb-0">
                  <li><i class="fa-li fa fa-user fa-lg"></i><b>Pemateri</b><br>{{ $data->tutor }}</li>
                  <li><i class="fa-li fa fa-calendar-o fa-lg"></i><b>Waktu</b><br>{{ $data->date }}</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="fa-ul ml-4 mb-0">
                  <li><i class="fa-li fa fa-map-marker fa-lg"></i><b>Tempat</b><br>{{ $data->place }}</li>
                  <li><i class="fa-li fa fa-ban fa-lg"></i><b>Batas Registrasi</b><br>{{ $data->deadline }}</li>
                </ul>
              </div>
            </div>
            <a href="{{ $data->registration_link  }}" class="btn text-white custom-{{ $data->color }} py-2 px-3 {{ $data->registration_link ? '' : 'disabled' }}" target="_blank">
              <i class="fa fa-paper-plane" aria-hidden="true"></i> {{ $data->registration_link ? 'Registrasi' : 'Belum Tersedia' }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-4">
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0 order-md-1">
          <div class="card">
            <div class="card-body">
              <p class="font-primary h3 mb-4">Prasyarat:</p>
              {!! $data->requirement !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <p class="font-primary h3 mb-4">Materi:</p>
              {!! $data->content !!}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

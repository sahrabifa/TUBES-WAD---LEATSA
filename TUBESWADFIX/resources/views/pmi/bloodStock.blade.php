@extends('layout.app')
@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-5 text-center">
            <div class="card h-100">
                <div class="card-header bg-red100 text-light">
                    CARI STOK DARAH
                </div>
                <form action="" class="overflow-auto p-3">
                    <div class="card-body py-0 pt-3">
                        <div class="form-group text-left">
                            <label for="bloodType">Golongan Darah</label>
                            <select class="form-control" id="bloodType">
                                <option>A+</option>
                                <option>AB</option>
                                <option>B</option>
                                <option>O</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <div class="form-group text-left">
                            <label for="component">Komponen</label>
                            <select class="form-control" id="component">
                                <option>-Pilih Komponen-</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <div class="form-group text-left">
                            <label for="province">Provinsi</label>
                            <select class="form-control" id="province">
                                <option>-Pilih Provinsi-</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">CARI</button>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-5 text-center">
            <div class="card h-100">
                <div class="card-header bg-red100 text-light">
                    CARI TEMAN
                </div>
                <form action="" class="overflow-auto p-3">
                    <div class="card-body py-0 pt-3">
                        <div class="form-group text-left">
                            <label for="bloodType">Golongan Darah</label>
                            <select class="form-control" id="bloodType">
                                <option>A+</option>
                                <option>AB</option>
                                <option>B</option>
                                <option>O</option>
                            </select>
                        </div>
                    </div>
                    <a href="{{ route('find-friend') }}" type="button" class="btn btn-danger">CARI</a>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-5 text-center">
            <div class="card h-100">
                <div class="card-header bg-red100 text-light">
                    PETA LOKASI
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/files/maps.png') }}" alt="gmaps" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <div class="card h-100">
                <div class="card-header bg-red100 text-light text-left">
                    <b> JUMLAH PENDONOR </b> | PROVINSI ACEH
                </div>
                <div class="card-body p-1">
                    <canvas id="chart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
  let ctx = $('#chart');
  let data = {
    labels: ['A+', 'B+', 'O+', 'AB+', 'A-', 'B-', 'O-', 'AB-'],
    datasets: [
      {
        label: 'JUMLAH PENDONOR',
        borderWidth: 2,
        data: [700, 400, 200, 500, 100, 150, 600, 300],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(39, 174, 96, 0.2)',
          'rgba(93, 173, 226, 0.2)'
        ],
      },
    ]
  };

  new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
})
</script>
@stop


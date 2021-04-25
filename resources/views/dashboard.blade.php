@extends('app.app')
@section('page_name','Dashboard')


@section('content')
    
      <div class="row my-4">
  <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
      <div class="card">
          <h5 class="card-header">{{ $dash_pembeli->object_dash }}</h5>
          <div class="card-body">
            <h5 class="card-title">{{ $dash_pembeli->value }}</h5>
            <p class="card-text">{{ $dash_pembeli->periode }}</p>
            <p class="card-text text-{{ $dash_pembeli->diff_periode>=0 ? 'success':'danger' }}">{{ $dash_pembeli->diff_periode>=0 ? 'Penambahan':'Pengurangan' }} {{ abs($dash_pembeli->diff_periode)  }}% dari periode lalu</p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card">
          <h5 class="card-header">{{ $dash_omset->object_dash }}</h5>
          <div class="card-body">
            <h5 class="card-title">{{ number_format($dash_omset->value) }}</h5>
            <p class="card-text">{{ $dash_omset->periode }}</p>
            <p class="card-text text-{{ $dash_omset->diff_periode>=0 ? 'success':'danger' }}">{{ $dash_omset->diff_periode>=0 ? 'Penambahan':'Pengurangan' }} {{ abs($dash_omset->diff_periode)  }}% dari periode lalu</p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card">
          <h5 class="card-header">{{ $dash_penjualan->object_dash }}</h5>
          <div class="card-body">
            <h5 class="card-title">{{ $dash_penjualan->value }}</h5>
            <p class="card-text">{{ $dash_penjualan->periode }}</p>
            <p class="card-text text-{{ $dash_penjualan->diff_periode>=0 ? 'success':'danger' }}">{{ $dash_penjualan->diff_periode>=0 ? 'Penambahan':'Pengurangan' }} {{ abs($dash_penjualan->diff_periode)  }}% dari periode lalu</p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card">
          <h5 class="card-header">{{ $dash_pengunjung->object_dash }}</h5>
          <div class="card-body">
            <h5 class="card-title">{{ $dash_pengunjung->value }}</h5>
            <p class="card-text">{{ $dash_pengunjung->periode }}</p>
            <p class="card-text text-{{ $dash_pengunjung->diff_periode>=0 ? 'success':'danger' }}">{{ $dash_pengunjung->diff_periode>=0 ? 'Penambahan':'Pengurangan' }} {{ abs($dash_pengunjung->diff_periode)  }}% dari periode lalu</p>
          </div>
        </div>
  </div>
</div>
@endsection
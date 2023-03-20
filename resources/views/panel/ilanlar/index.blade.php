@extends('layout.panel.app')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h2 class="text-themecolor">İlan Yönetimi </h2>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">

          <a href="{{route('ilan.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
              class="fa fa-plus-circle"></i> Yeni Ekle</a>
        </div>
      </div>
    </div>

    <table class="table table">
      <thead>
        <tr>
          <th scope="col">Sıra No</th>
          <th scope="col">İlan Başlıgı</th>
          <th scope="col">Resim</th>
          <th scope="col">Fiyat</th>
          <th scope="col">Aciklama</th>
          <th scope="col">ulke</th>
          <th scope="col">İl</th>
          <th scope="col">İlçe</th>
          <th scope="col">Durum</th>
          <th scope="col">İşlemler</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($estates as $estate)
        <tr>
          <th scope="row">{{$estate->id}}</th>
          <td>{{$estate->title}}</td>
          <td><img src="{{asset('/') . $estate->image}}" class="w-100" alt=""></td>
          <td>{{$estate->price}}</td>
          <td>{{$estate->description}}</td>
          <td>{{$estate->address->country ? $estate->address->country->name : null }}</td>
          <td>{{$estate->address->city ? $estate->address->city->name : null }}</td>
          <td>{{$estate->address->county ? $estate->address->county->name : null }}</td>
          <td>{{$estate->status}}</td>
          <td>
            <div>
              <div class="btn-group">
                <a href="{{route('ilan.edit',1)}}" class="btn btn-warning">
                  <i class="icon-pencil"></i> Düzenle
                </a>
                <button type="button" class="btn btn-danger">
                  <i class="icon-trash"></i> Sil
                </button>
              </div>
          </td>
        </tr>
      @endforeach

  </tbody>
  </table>
  @endsection
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
                <h1 class="text-themecolor">Ülkeler </h1>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">

                    <a type="button" href="{{route('client-type.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Yeni Ekle</a>
                </div>
            </div>
        </div>

        <table class="table table">
            <thead>
                <th>Sıra No</th>
                <th>Kategoriler</th>
                <th>Durum</th>
                <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientTypes as $clientType)
                <tr class="table-primary">
                    <td>{{$clientType->id}}</td>
                    <td>{{$clientType->name}}</td>
                    <td>@if ($clientType->status == 1)
                        <button type="submit" class="btn btn-success btn-rounded">Aktif</button>
                        @else
                        <button type="submit" class="btn btn-danger btn-rounded">Deaktif</button>
                        @endif</td></td>
                    <td>   <div>
                        <div class="btn-group">
                            <a href="{{route('client-type.edit', $clientType->id)}}" class="btn btn"><i class="icon-pencil"></i> Düzenle</a>
                            <form action="{{route('client-type.destroy', $clientType->id)}}" method="post" >
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="icon-trash"></i>Sil </button>
                        </form>
                      </div></td>
                  </div>
    </tr>
    @endforeach
    </tbody>
    </table>
    @endsection

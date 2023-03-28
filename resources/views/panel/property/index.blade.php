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
                <h1 class="text-themecolor"> </h1>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">

                    <a type="button" href="{{route('property.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Yeni Ekle</a>
                </div>
            </div>
        </div>

        <table class="table table">
            <thead>
                <th>Ad</th>
                <th>Açıklama</th>
                <th>Fiyat</th>
                <th>Resim</th>
                <th>Müşteri</th>
                <th>Emlak Türü</th>
                <th>Durum</th>
                <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                <tr class="table-primary">
                    <td>{{$property->name}}</td>
                    <td>{{$property->description}}</td>
                    <td>{{$property->price}}</td>
                    <td><img class="w-100" src="{{$property->image}}" alt=""></td>
                    <td>{{$property->client->name}}</td>
                    <td>{{$property->propertyType->name}}</td>
                    <td>@if ($property->status == 1)
                        <button type="submit" class="btn btn-success btn-rounded">Aktif</button>
                        @else
                        <button type="submit" class="btn btn-danger btn-rounded">Deaktif</button>
                        @endif
                    </td>
                    <td>
                        <div>
                            <div class="btn-group">
                                <a href="{{route('property.edit',$property->id)}}" class="btn btn"><i class="icon-pencil"></i> Düzenle</a>
                                <form action="{{route('property.destroy',$property->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="icon-trash"></i>Sil </button>
                                </form>
                            </div>
                    </td>
    </div>
    </tr>
    @endforeach
    </tbody>
    </table>
    @endsection

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
                <h2 class="text-themecolor">Sayfalar </h2>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">

                    <a type="button" href="{{route('sayfa.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Yeni Ekle</a>
                </div>
            </div>
        </div>

        <table class="table table">
            <thead>
                <th>Sıra No</th>
                <th>Yazı Başlığı</th>
                <th>kullanici</th>
                <th>slug</th>
                <th>Sayfa İçeriği</th>
                <th>Seo Başlığı</th>
                <th>Seo Açıklaması</th>
                <th>Ana Kelime</th>
                <th>Resim</th>
                <th>Durum</th>
                <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                <tr class="table-primary">
                    <td>{{$page->user_id}}</td>
                    <td>{{$page->title}}</td>
                    <td>{{$page->user}}</td>
                    <td>{{$page->slug}}</td>
                    <td>{{$page->description}}</td>
                    <td>{{$page->seo_title}}</td>
                    <td>{{$page->seo_description}}</td>
                    <td>{{$page->seo_keyword}}</td>
                    <td><img class="w-100" src="{{$page->image}}" alt=""></td>
                    <td>
                        <form action="{{route('sayfa.update',$page->id)}}" method="POST" >
                            @csrf
                            @method('put')
                            <input hidden="hidden" name="status" value="{{$page->status}}">
                            <button type="sumit" class="btn btn-{{$page->status== 1 ? 'success' : 'danger'}} btn-rounded">{{$page->status == 1 ? 'Aktif' : 'DeAktif'}}</button>
                        </form>
                    </td>
                    <td>
                        <div>
                            <a href="{{route('sayfa.edit', $page->id)}}" class="btn btn"> <i class="icon-pencil"></i> Düzenle </a>
                            <form action="{{route('sayfa.destroy', $page->id)}}" method="post" >
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="icon-trash"></i>Sil </button>
                        </form>
                        </div>
                    </td>
                </tr>

    </div>
    </tr>
    @endforeach
    </tbody>
    </table>
    @endsection

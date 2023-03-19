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
                <h2 class="text-themecolor">Blog </h2>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">

                    <a href="{{route('blog.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Yeni Ekle</a>
                </div>
            </div>
        </div>

        <table class="table table">
            <thead>
                <th>Sıra No</th>
                <th>Yazı Başlığı</th>
                <th>Sayfa İçeriği</th>
                <th>Tags</th>
                <th>Seo Başlığı</th>
                <th>Seo Açıklaması</th>
                <th>Ana Kelime</th>
                <th>Resim</th>
                <th>Durum</th>
                <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="table-primary">
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->tags}}</td>
                    <td>{{$post->seo_title}}</td>
                    <td>{{$post->seo_description}}</td>
                    <td>{{$post->seo_keyword}}</td>
                    <td><img class="w-100" src="{{$post->image}}" alt=""></td>
                    <td>
                        <form action="{{route('blog.update',$post->id)}}" method="POST"  >
                            @csrf
                            @method('put')
                            <input hidden="hidden" name="status" value="{{$post->status}}">
                            <button type="sumit" class="btn btn-{{$post->status== 1 ? 'success' : 'danger'}} btn-rounded">{{$post->status == 1 ? 'Aktif' : 'DeAktif'}}</button>
                        </form>
                    </td>
                    <td>
                        <div>
                            <a href="{{route('blog.edit', $post->id)}}" class="btn btn"> <i class="icon-pencil"></i> Düzenle </a>
                            <form action="{{route('blog.destroy', $post->id)}}" method="post" >
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

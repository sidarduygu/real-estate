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
                <h2 class="text-themecolor">Kullanıcılar </h2>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">

                    <a href="{{route('kullanici.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Yeni Ekle</a>
                </div>
            </div>
        </div>

        <table class="table table">
            <thead>
                <th>Sıra No</th>
                <th>Adı</th>
                <th>Soyadi</th>
                <th>E-posta</th>
                <th>Telefon</th>
                <th>uyelik turu</th>
                <th>Durum</th>
                <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->type}}</td>
                <td>
                    <form action="{{route('kullanici.update', $user->id)}}" method="post">
                        @method('put')
                        @csrf
                        <input type="hidden" name="status" value="{{$user->status}}">
                        <button type="submit" class="btn btn-{{$user->status == 1 ? 'success' : 'danger'}} btn-rounded">{{$user->status == 1 ? 'Aktif' : 'DeAktif'}}</button>
                    </form>
                </td>

                <td>
                    <div>
                        <div class="btn-group">
                            <a href="{{route('kullanici.edit', $user->id)}}" class="btn btn"><i class="icon-pencil"></i> Düzenle</a>
                            <form action="{{route('kullanici.destroy',$user->id)}}" method="POST" >
                                @csrf
                                @method('delete')
                               <button class="btn btn-danger"><i class="icon-trash"></i> Sil</button>
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

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

                           <a href="{{route('ilan.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Yeni Ekle</a>
                       </div>
                   </div>
               </div>

               <table class="table table">
                   <thead>
                     <tr>
                       <th scope="col">Sıra No</th>
                       <th scope="col">İlan Başlıgı</th>
                       <th scope="col">Fiyat</th>
                       <th scope="col">İlan Tarihi</th>
                       <th scope="col">İl</th>
                       <th scope="col">İlçe</th>
                       <th scope="col">Resim</th></th>
                       <th scope="col">Durum</th>
                       <th scope="col">İşlemler</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <th scope="row">1</th>
                       <td>İlan Başlığı</td>
                       <td>Fiyat</td>
                       <td>İlan Tarihi</td>
                       <td>İl</td>
                       <td>İlçe</td>
                       <td>Resim</td>
                       <td><a class="btn btn-success btn-rounded">Aktif</a></td>
                       <td>
                           <div>
                         <div class="btn-group">
                           <a href="{{route('ilan.edit',1)}}" class="btn btn-warning">
                               <i class="icon-pencil"></i> Düzenle
                           </a>
                           <button type="button" class="btn btn-danger">
                               <i class="icon-trash"></i>   Sil
                           </button>
                       </div></td>
                   </div>
                     </tr>

                   </tbody>
                 </table>
@endsection

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
                </div>
            </div>
        </div>
        <div class="container-fluid">
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Kullanıcı Ekle</h3>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{route('kullanici.store')}}" method="post">
                            @csrf
                            <div class="form-group m-t-40 row">
                                <label for="example-text-input" class="col-2 col-form-label">Adı</label>
                                <div class="col-10">
                                    <input class="form-control" name="name" type="text" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group m-t-40 row">
                                <label for="example-text-input" class="col-2 col-form-label">Soyadı</label>
                                <div class="col-10">
                                    <input class="form-control" name="surname" type="text" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Telefon No</label>
                                <div class="col-10">
                                    <input class="form-control" name="phone" type="tel" id="example-search-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">E-posta</label>
                                <div class="col-10">
                                    <input class="form-control" name="email" type="email" value="@example.com"
                                        id="example-email-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-2 col-form-label">Şifre</label>
                                <div class="col-10">
                                    <input class="form-control" name="password" type="password"
                                        id="example-password-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-month-input" class="col-2 col-form-label">Üyelik Türü</label>
                                <div class="col-10">
                                    <select class="custom-select col-12" name="type" id="inlineFormCustomSelect">
                                        <option disabled>Üyelik Türü</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="status" value="1" class="custom-control-input"
                                    id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">
                                    <h4>Aktif</h4>
                                </label>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-success  d-none d-lg-block m-0">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->


    @endsection

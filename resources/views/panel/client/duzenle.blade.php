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
                <h1 class="text-themecolor"></h1>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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
                        <h3 class="card-title"></h3>
                        <form action="{{route('client.update', $client->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Ad</label>
                                <input type="text" name="name" value="{{$client->name}}" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Soyad</label>
                                <input type="text" name="surname" value="{{$client->surname}}" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">E-posta</label>
                                <input type="email" name="email" value="{{$client->email}}" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Şifre</label>
                                <input type="text" name="password" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Adres-1</label>
                                <input type="text" name="address_1" value="{{$client->address_1}}" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Adres-2</label>
                                <input type="text" name="address_2" value="{{$client->address_2}}" id="form6Example3" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Müşteri Türü</label>
                            <select class="form-control" name="client_type_id" id="exampleFormControlSelect1">
                                @foreach ($clientTypes as $clientType)
                                    <option value="{{$clientType->id}}" {{ $clientType->id == $client->client_type_id ? 'selected' : '' }}>{{$clientType->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ülke</label>
                            <select class="form-control" name="country" id="exampleFormControlSelect1">
                                @foreach ($countries as $country)
                                <option {{$country->name == $client->country ? "selected" : null}}
                                    value="{{$country->name}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Şehir</label>
                            <select class="form-control" name="city" id="exampleFormControlSelect1">
                                @foreach ($cities as $city)
                                <option {{$city->name == $client->city ? "selected" : null}}
                                    value="{{$city->name}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Durum</label>
                            <select class="form-control" name="state" id="exampleFormControlSelect1">
                                <option {{$client->state == 1 ? "selected" : null}} value="1">Aktif</option>
                                <option {{$client->state == 0 ? "selected" : null}} value="0">Deaktif</option>
                            </select>
                        </div>

                            <button type="submit" class="btn btn-success">
                                Kaydet
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->


        @endsection

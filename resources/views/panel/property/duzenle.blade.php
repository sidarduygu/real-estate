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
                        <form action="{{route('property.update',$property->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Ad</label>
                                <input type="text" name="name" value="{{$property->name}}" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Açıklama</label>
                                <input type="text" name="description" value="{{$property->description}}" id="form6Example3"
                                    class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Müşteri</label>
                                <select class="form-control" name="client_id" id="exampleFormControlSelect1">
                                    @foreach ($clients as $client)
                                    <option value="{{$client->id}}" {{ $client->id == $client->client_id ? 'selected' :
                                        '' }}>{{$client->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Emlak Türü</label>
                                <select class="form-control" name="property_type_id" id="exampleFormControlSelect1">
                                    @foreach ($propertyTypes as $propertyType)
                                    <option value="{{$propertyType->id}}" {{ $propertyType->id == $property->propert_type_id ? 'selected' : '' }}>
                                        {{$propertyType->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Durum</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
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

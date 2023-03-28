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
                        <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Ad</label>
                                <input type="text" name="name" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Açıklama</label>
                                <input type="text" name="description" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form6Example3">Fiyat</label>
                                <input type="number" name="price" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Müşreti</label>
                                <select class="form-control" name="client_id" id="exampleFormControlSelect1">
                                    @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Emlak Tipi</label>
                                <select class="form-control" name="property_type_id" id="exampleFormControlSelect1">
                                    @foreach ($propertyTypes as $propertyType)
                                    <option value="{{$propertyType->id}}">{{$propertyType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Featur</label>
                                <select class="form-control" name="feature_id" id="exampleFormControlSelect1">
                                    @foreach ($features as $feature)
                                    <option value="{{$feature->id}}">{{$feature->name}}</option>
                                    @endforeach
                                </select>

                                <label for="exampleFormControlSelect1">Featur Value</label>
                                <input type="number" name="feature_value" id="form6Example3" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Durum</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                    <option value="1">Aktif</option>
                                    <option value="0">Deaktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formFileMultiple" class="form-label">Resim Yükle</label>
                                <input class="form-control" name="image" type="file"   />
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


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
                    <h1 class="text-themecolor">Ülkeler</h1>
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
                                <h3 class="card-title">Ülke Düzenleme</h3>
                                <form action="{{route('country.update', $country->id)}}" method="post" >
                                    @csrf
                                    @method('put')
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3">Ülke Adı</label>
                                        <input type="text" name="name" value="{{$country->name}}" id="form6Example3" class="form-control" />
                                      </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3">Ülke Kodu</label>
                                        <input type="number" name="country_code" value="{{$country->country_code}}" id="form6Example3" class="form-control" />
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


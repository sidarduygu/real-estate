


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
                    <h1 class="text-themecolor">İlanlar </h1>
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
                                <h3 class="card-title">İlan Düzenleme</h3>
                                <form  action="{{route('estate.update',$estate->id)}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    @method('put')
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3">İlan Başlıgı</label>
                                        <input type="text" name="title" value="{{$estate->title}}" id="form6Example3" class="form-control"/>
                                      </div>
                                      <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example5">Fiyat</label>
                                        <input type="text" name="price" value="{{$estate->price}}" id="form6Example5" class="form-control" />
                                      </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                      <label class="form-label" for="formExample3">Aciklama</label>
                                      <input type="text" id="form6Example3" name="description" value="{{$estate->description}}" class="form-control" />
                                    </div>


                                    <!-- Text input -->
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Ulke</label>
                                        <select class="form-control" name="country_id" id="exampleFormControlSelect1">
                                          @foreach ($countries as $country)
                                          <option {{$estate->address->country_id == $country->id ? "selected" : null}}  value="{{$country->id}}">{{$country->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Il</label>
                                        <select class="form-control" name="city_id" id="exampleFormControlSelect1">
                                          @foreach ($cities as $city)
                                          <option {{$estate->address->city_id == $city->id ? "selected" : null}} value="{{$city->id}}">{{$city->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Ilce</label>
                                        <select class="form-control" name="county_id" id="exampleFormControlSelect1">
                                          @foreach ($counties as $county)
                                          <option {{$estate->address->county_id == $county->id ? "selected" : null}} value="{{$county->id}}">{{$county->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>

                                    <!-- Number input -->

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Durum</label>
                                        <select class="form-control" name="status" value="{{$estate->status}}" id="exampleFormControlSelect1">
                                          <option value="1">Aktif</option>
                                          <option value="0">Deaktif</option>
                                        </select>
                                      </div>
                                      <div class="form-outline mb-4">
                                      <label for="formFileDisabled" src="{{asset('image') . $estate->image}}" class="w-100" alt="" class="form-label">Resim Yükle</label>
                                      <input class="form-control" type="file" name="image" id="formFileDisabled"
                                      />
                                    </div>
                                    <!-- Message input -->

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-success  btn-block mb-4">
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



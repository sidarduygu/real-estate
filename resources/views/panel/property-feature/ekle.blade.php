
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
                        <h1 class="text-themecolor">Kategoriler</h1>
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
                                    <h3 class="card-title">Kategori Ekleme</h3>
                                    <form action="{{route('property-feature.store')}}" method="post" >
                                        @csrf

                                          <div class="form-group">
                                            <label for="exampleFormControlSelect1">Mülk</label>
                                            <select class="form-control" name="property_id" id="exampleFormControlSelect1">
                                                @foreach ($properties as $property)
                                                <option value="{{$property->id}}">{{$property->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlSelect1">Özelik</label>
                                            <select class="form-control" name="feature_id" id="exampleFormControlSelect1">
                                                @foreach ($features as $feature)
                                                <option value="{{$feature->id}}">{{$feature->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example3">Degeri</label>
                                            <input type="text" name="value" id="form6Example3" class="form-control" />
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


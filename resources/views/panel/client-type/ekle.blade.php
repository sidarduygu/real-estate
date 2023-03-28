
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
                                    <form action="{{route('client-type.store')}}" method="post" >
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example3">Kategori Adı</label>
                                            <input type="text" name="name" id="form6Example3" class="form-control" />
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlSelect1">Durum</label>
                                            <select class="form-control" name="status" id="exampleFormControlSelect1">
                                                <option value="1">Aktif</option>
                                                <option value="0">Deaktif</option>
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


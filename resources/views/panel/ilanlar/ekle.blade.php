


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
                    <h1 class="text-themecolor">İlanlar</h1>
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
                                <h3 class="card-title">İlan Ekleme</h3>
                                <form>
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3">İlan Başlıgı</label>
                                        <input type="text" name="advert_title" id="form6Example3" class="form-control" />
                                      </div>
                                      <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example5">Fiyat</label>
                                        <input type="text" name="price" id="form6Example5" class="form-control" />
                                      </div>
                                      <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3">İlan Tarihi</label>
                                        <input type="text" id="form6Example3" class="form-control" />
                                      </div>

                                    <!-- Text input -->
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                      <label class="form-label" for="formExample4">İl</label>
                                      <input type="text" name="province" id="form6Example4" class="form-control" />
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                      <label class="form-label" for="form6Example5">İlçe</label>
                                      <input type="text" name="district" id="form6Example5" class="form-control" />
                                    </div>

                                    <!-- Number input -->

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Durum</label>
                                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                                          <option>Aktif</option>
                                          <option>Deaktif</option>
                                        </select>
                                      </div>
                                      <div class="form-outline mb-4">
                                      <label for="formFileDisabled" class="form-label">Resim Yükle</label>
                                      <input class="form-control" name="image" type="file" id="formFileDisabled"
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



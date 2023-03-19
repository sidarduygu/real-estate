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
                    <h1 class="text-themecolor">Sayfalar </h1>
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
                                <h3 class="card-title">Sayfa Düzenleme</h3>
                                <form action="{{route('sayfa.update', $page->id)}}" method="post" >
                                    @csrf
                                    @method('put')
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3">Yazı Başlığı</label>
                                        <input type="text" name="title" id="form6Example3" value="{{$page->title}}" class="form-control" />
                                      </div>
                                      <div class="form-outline mb-4">
                                        <label class="form-label"  for="form6Example7">Sayfa İçeriği</label>

                                        <textarea class="form-control" name="description"  id="form6Example7"  rows="4">{{$page->description}}</textarea>
                                      </div>

                                    <!-- Text input -->

                                    <!-- Text input -->

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                      <label class="form-label" for="form6Example5">Seo Başlığı</label>
                                      <input type="text" name="seo_title" value="{{$page->seo_title}}" id="form6Example5"  class="form-control" />
                                    </div>

                                    <!-- Number input -->
                                    <div class="form-outline mb-4">
                                       <label class="form-label" for="form6Example6">Seo Açıklaması</label>
                                      <input type="text" name="seo_description" value="{{$page->seo_description}}" id="form6Example6"  class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                     <label class="form-label" for="form6Example6">Ana Kelime</label>
                                     <input type="text" name="seo_keyword" value="{{$page->seo_keyword}}" id="form6Example6"  class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Durum</label>
                                        <select class="form-control" name="status" value="{{$page->status}}" id="exampleFormControlSelect1">
                                          <option>Aktif</option>
                                          <option>Deaktif</option>
                                        </select>
                                      </div>
                                      <div class="form-outline mb-4">

                                      <img style="width:70px; margin-left:6px; padding-bottom:8px" src="{{$page->image}}" alt="">
                                      <input class="form-control" name="image"  type="file" id="formFileDisabled"/>
                                      <label for="formFileDisabled" class="form-label"><h3>Resim Yükle</h3></label>
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

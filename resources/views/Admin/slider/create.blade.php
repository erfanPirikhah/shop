@extends('Admin.layout.master')


@section('script')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>$('#lfm').filemanager('image');</script>

@endsection



@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">مثال ساده</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">نام اسلایدر</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="نام اسلایدر">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">مسیر-url</label>
            <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="مسیر-url">
          </div>
      
          <div class="form-group ">
            <label>آپلود تصاویر </label>
            <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control" type="text" name="filepath">
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;">
          </div>
   
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>
  </div>
@endsection
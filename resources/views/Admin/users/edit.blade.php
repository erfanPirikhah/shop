@extends('Admin.layout.master')


@section('script')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>$('#lfm').filemanager('image');</script>
@endsection


@section('content')

<div class="card card-primary col-8" style="margin:auto">
    <div class="card-header">
      <h3 class="card-title">ویرایش کاربران</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form" action="{{route('user.update',['id'=>$user->id])}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('patch') }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">تغییر نام کاربر</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{$user->name}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">تغییر ایمیل کاربر</label>
          <input type="email" class="form-control"  name="email" id="exampleInputPassword1" value="{{$user->email}}">
        </div>

        <div class="form-group col-4">
            <label>سطح دسترسی </label>
            <select class="form-control"  name="level">
              <option value="admin" {{$user->level == 'admin' ? 'selected' : ''}}>Admin</option>
              <option value="user"  {{$user->level == 'user' ? 'selected' : ''}}>User</option>
            </select>
          </div>
        
        <div class="form-group col-4">
            <label>آپلود تصاویر </label>
            <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$user->image}}">
            </div>
            <img  src="{{$user->image}}" id="holder" style="margin-top:15px;max-height:100px;">
          </div>
       
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>
  </div>
    
@endsection
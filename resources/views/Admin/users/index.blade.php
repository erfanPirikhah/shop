@extends('Admin.layout.master')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">محصولات</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tbody><tr>
              <th>شماره</th>
              <th>عکس محصول</th>
              <th>نام کاربر</th>
              <th>ایمیل</th>
              <th>سطح دسترسی</th>
              <th>تاریخ ثبت نام</th>
              <th>تنظیمات</th>
            </tr>
           @foreach ($users as $item)
            <tr>
                <td>{{$n++}}</td>
                <td><img src="{{$item->image}}" alt="{{$item->name}}" style="width:100px;height:90px"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->level}}</td>
                <td>{{jdate($item->created_at)->format('%d/ %m/ %Y')}}</td>
              
              
                <td>  <form action="{{Route('user.destroy',["id"=>$item->id])}}"  method="post">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="btn btn-group btn-xs">
                     <a href="{{Route('user.edit',["id"=>$item->id])}}" class="btn btn-primary btn-sm">ویرایش</a>
                      <button type="submit" class="btn btn-danger btn-sm" > حذف</button>
                    </div>

                    
                      </form></td>
            </tr>
           @endforeach

          </tbody></table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
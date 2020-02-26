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
              <th>نامحصول</th>
              <th>تاریخ</th>
              <th>وضعیت</th>
              <th>قیمت</th>
              <th>تعداد</th>
              <th>تنظیمات</th>
            </tr>
           @foreach ($products as $item)
            <tr>
                <td>{{$n++}}</td>
                <td><img src="{{$item->imageUrl}}" alt="{{$item->name_en}}" style="width:100px;height:90px"></td>
                <td>{{$item->name_en}}</td>
                <td>{{$item->created_at}}</td>
                <td><span class="{{$item->status == '' ? 'badge badge-warning' : 'badge badge-success'}}">{{$item->status == '' ? 'ناموجود' : 'موجود'}}</span></td>
                <td>{{number_format($item->price)}}</td>
                <td>{{$item->count}}</td>
              
                <td>  <form action="{{Route('slider.destroy',["id"=>$item->id])}}"  method="post">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="btn btn-group btn-xs">
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
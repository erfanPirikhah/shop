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
              <th>ویژه</th>
              <th>قیمت</th>
              <th>تعداد</th>
              <th>تنظیمات</th>
            </tr>
           @foreach ($products as $item)
            <tr>
                <td>{{$n++}}</td>
                <td><img src="{{$item->imageUrl}}" alt="{{$item->name_en}}" style="width:120px;height:110px"></td>
                <td>{{$item->name_en}}</td>
                <td>{{jdate($item->created_at)->format('%d/ %m/ %Y')}}</td>
                <td><span class="{{$item->status == '' ? 'badge  badge-pill badge-success' : 'badge badge-pill badge-warning'}}">{{$item->status == '' ? 'موجود' : 'ناموجود'}}</span></td>
                <td><span class="{{$item->best == '1' ? 'badge badge-success' : 'badge badge-danger'}}">{{$item->best == '1' ? 'ویژه' : 'عادی'}}</span></td>
                <td>{{number_format($item->price)}}</td>
                <td>{{$item->count}}</td>
              
                <td>  <form action="{{Route('product.destroy',["id"=>$item->id])}}"  method="post">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="btn btn-group btn-xs">
                     <a href="{{Route('product.edit',["id"=>$item->id])}}" class="btn btn-primary btn-sm">ویرایش</a>
                      <button type="submit" class="btn btn-danger btn-sm" onclick="archiveFunction()" > حذف</button>
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
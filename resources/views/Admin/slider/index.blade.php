@extends('Admin.layout.master')

@section('content')

<div class="row">
    <div class="col-9" style="margin:auto">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">اسلایدر</h3>

       
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tbody><tr>
              <th>شماره</th>
              <th>عکس</th>
              <th>نام</th>
              <th>url</th>
              <th>تنظیمات</th>
            </tr>
          @foreach ($sliders as $item)
                <tr>
                    <td>{{$n++}}</td>
                    <td><img src="{{$item->imageUrl}}" alt="{{$item->title}}" style="width:350px;height:100px"></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->url}}</td>
                    <td>  <form action="{{Route('slider.destroy',["id"=>$item->id])}}"  method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <div class="btn btn-group btn-xs">
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
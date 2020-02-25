@extends('Admin.layout.master')

@section('content')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">جدول رنگ ها</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-hover">
                <tbody><tr>
                  <th style="width: 10px">تعداد</th>
                  <th>رنگ</th>
                  <th>تنظیمات</th>
     
                </tr>

                @foreach ($colors as $item)
                <tr>
                    <td>{{$n++}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <form action="{{Route('color.destroy',["id"=>$item->id])}}"  method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <div class="btn btn-group btn-xs">
                              <button type="submit" class="btn btn-danger btn-sm" > حذف</button>
                            </div>
                              </form>
                    </td>
                  </tr>
                @endforeach
               

              </tbody></table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    
    <div class="col-5">
      
        <form action="{{route('color.store')}}" method="POST">
          {{ csrf_field() }}
                <div class="card-body form-group"> 
                    <label >افزودن رنگ</label>
                    <input name="color" class="form-control" type="text" >
                  </div>
    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">تایید</button>
                  </div>
                 
            </form>
    </div>
</div>



@endsection
@extends('Admin.layout.master')

@section('content')
@foreach ($cats as $item)
<a href="{{Route('cat.edit',['id'=>$item->id])}}">dsda</a>
@endforeach

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">جدول دسته بندی</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-hover">
                <tbody><tr>
                  <th style="width: 10px">تعداد</th>
                  <th>دسته های فارسی</th>
                  <th>دسته های انگلیسی</th>
                  <th>تنظیمات</th>
     
                </tr>

                @foreach ($cats as $item)
                <tr>
                    <td>{{$n++}}</td>
                    <td>{{$item->title_fa}}</td>
                    <td>{{$item->title_en}}</td>
                    <td>
                      <form action="{{Route('cat.destroy',["id"=>$item->id])}}"  method="post">
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
      
        <form action="{{route('cat.store')}}" method="POST">
          {{ csrf_field() }}
                <div class="card-body form-group"> 
                    
                    <input name="title_fa" class="form-control" type="text" placeholder="افزودن دسته بندی فارسی" >
                  </div>

                  <div class="card-body form-group"> 
                    
                    <input name="title_en" class="form-control" type="text" placeholder="افزودن دسته بندی انگلیسی">
                  </div>
    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">تایید</button>
                  </div>
                 
            </form>
    </div>
</div>



@endsection
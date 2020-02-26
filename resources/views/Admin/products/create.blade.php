@extends('Admin.layout.master')

@section('script')
<script src="/admin/ckeditor/ckeditor.js"></script>
<script>
  var options = {
   
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace( 'body',options );
</script>






<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>$('#lfm').filemanager('image');</script>


@endsection

@section('content')

<div class="card card-default col-10" style="margin : auto">
    <div class="card-header " style="margin-top:25px">
      <h3 class="card-title">افزودن محصول جدید</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    
  <form role="form" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="card-body" >
        <div class="row">
            <div class="form-group col-6">
              <label>انتخاب کنید</label>
              <input type="text" name="name_fa" class="form-control" placeholder="نام فارسی محصول ">
            </div>
        
            <div class="form-group col-6">
              <label>انتخاب کنید</label>
              <input type="text" name="name_en" class="form-control" placeholder="نام انگیلیسی محصول">
            </div>

          
            <div class="form-group col-4">
              <label>رنگ محصول</label>
              <select class="form-control"  name="color">
                
                  @foreach ($colors as $item)
                  <option value="{{$item->id}}">{{$item->name}}-{{$item->id}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group col-4">
              <label>برند</label>
              <select class="form-control"  name="brand">
                @foreach ($cats as $item)
              <option value="{{$item->id}}">--{{$item->title_en}}</option>
                @endforeach
                
              </select>
            </div>

            
            <div class="form-group col-4">
              <label>  حافظه ی داخلی (گیگابایت)</label>
              <select class="form-control"  name="internalMemory">
                <option value="1"> 1</option>
                <option value="1.5"> 1.5</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4 </option>
                <option value="6">6 </option>
                <option value="8">8</option>
                <option value="16">16 </option>
                <option value="32">32</option>
                <option value="64">64</option>
                <option value="128">128</option>
                <option value="512">512</option>
                <option value="1024">1024</option>
              </select>
            </div>

            <div class="form-group col-4">
              <label> شبکه های ارتباطی </label>
              <select class="form-control"  name="network">
                <option value="2G">2G</option>
                <option value="3G"> 3G</option>
                <option value="4G">4G</option>
                <option value="5G"> 5G</option>
                
              </select>
            </div>

            
            <div class="form-group col-4">
              <label>RAM (GIG)</label>
              <select class="form-control" name="ram">
                <option value="1">1</option>
                <option value="1.5"> 1.5</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="16">16</option>
                
              </select>
            </div>



            <div class="form-group col-4">
              <label> باتری قابل تعویض </label>
              <select class="form-control" name="replace_battry">
                <option value="دارد">دارد</option>
                <option value="ندارد"> ندارد</option> 
              </select>
            </div>

            <div class="form-group col-4">
              <label> اندازه ی صفحه نمایش  </label>
              <select class="form-control" name="screanSize">
                <option value="4">4</option>
                <option value="4.8"> 4.8</option> 
                <option value="5"> 5</option> 
                <option value="5.2"> 5.2</option> 
                <option value="5.3"> 5.3</option> 
                <option value="5.5">5.5</option> 
                <option value="6"> 6</option> 
              </select>
            </div>

            <div class="form-group col-4">
              <label> دوربین جلو </label>
              <select class="form-control" name="front_camera">
                <option value="1">1</option>
                <option value="1.5"> 1.5</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="32">32</option>
                <option value="48">48</option>
              
              </select>
            </div>


            <div class="form-group col-4">
              <label> دوربین پشت </label>
              <select class="form-control"  name="back_camera" >
                <option value="1">1</option>
                <option value="1.5"> 1.5</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="32">32</option>
                <option value="48">48</option>
              
              </select>
            </div>


            <div class="form-group col-4">
              <label>تعداد سیم کارت </label>
              <select class="form-control"  name="simNumber">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
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
                <input id="thumbnail" class="form-control" type="text" name="filepath">
              </div>
              <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>


            <div class="form-group col-4">
              <label>تعداد محصول</label>
              <input type="number" name="count" class="form-control" placeholder="تعداد محصول ">
            </div>

            <div class="form-group col-4">
              <label>درصد تخفیف</label>
              <input type="number" name="discount" class="form-control" placeholder="درصد تخفیف ">
            </div>

            <div class="form-group col-4">
              <label>کد محصول </label>
              <input type="number" name="code" class="form-control" placeholder="تعداد محصول ">
            </div><br>

            <div class="form-group col-4">
              <label>قیمت محصول </label>
              <input type="number" name="price" class="form-control" placeholder="تعداد محصول ">
            </div><br>

            &nbsp &nbsp <label>وضعیت موجودی</label><br>&nbsp &nbsp &nbsp <br>
            
            <div class="form-check">
            
              <input class="form-check-input"  name="status" type="checkbox"  id="defaultCheck1" value="1">
              <label class="form-check-label" for="defaultCheck1">
              نا موجود
              </label>
            </div>

     

            &nbsp &nbsp <label>پیشنهاد ویژه</label><br>&nbsp &nbsp &nbsp
            
            <div class="form-check">
            
              <input class="form-check-input" name="best" type="checkbox"  id="defaultCheck2" value="1">
              <label class="form-check-label" for="defaultCheck2">
                پیشنهاد ویژه
              </label>
            </div>



            <div class="form-group col-12">
              <label>توضیحات محصول</label>
              <textarea name="body" id="body"></textarea>
            </div>



        </div>

        
      </div>
            <div >
              <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
         </form>
      </div>

     

  
  </div>

  

  
    
@endsection
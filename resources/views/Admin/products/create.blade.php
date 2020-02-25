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
    
    <form role="form">

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
              <select class="form-control">
                
                  @foreach ($colors as $item)
                  <option value={{$item->id}}>{{$item->name}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group col-4">
              <label>برند</label>
              <select class="form-control">
                @foreach ($cats as $item)
              <option value={{$item->id}}>{{$item->title_fa}}--{{$item->title_en}}</option>
                @endforeach
                
              </select>
            </div>

            
            <div class="form-group col-4">
              <label>  حافظه ی داخلی (گیگابایت)</label>
              <select class="form-control">
                <option> 1</option>
                <option> 1.5</option>
                <option>2</option>
                <option>3</option>
                <option>4 </option>
                <option>6 </option>
                <option>8</option>
                <option>16 </option>
                <option>32</option>
                <option>64</option>
                <option>128</option>
                <option>512</option>
                <option>1024</option>
              </select>
            </div>

            <div class="form-group col-4">
              <label> شبکه های ارتباطی </label>
              <select class="form-control">
                <option>2G</option>
                <option> 3G</option>
                <option>4G</option>
                <option>5G</option>
                
              </select>
            </div>

            
            <div class="form-group col-4">
              <label>RAM (GIG)</label>
              <select class="form-control">
                <option>1</option>
                <option> 1.5</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>6</option>
                <option>8</option>
                <option>10</option>
                <option>12</option>
                <option>16</option>
                
              </select>
            </div>



            <div class="form-group col-4">
              <label> باتری قابل تعویض </label>
              <select class="form-control">
                <option>دارد</option>
                <option> ندارد</option> 
              </select>
            </div>

            <div class="form-group col-4">
              <label> اندازه ی صفحه نمایش  </label>
              <select class="form-control">
                <option>4</option>
                <option> 4.8</option> 
                <option> 5</option> 
                <option> 5.2</option> 
                <option> 5.3</option> 
                <option>5.5</option> 
                <option> 6</option> 
              </select>
            </div>

            <div class="form-group col-4">
              <label> دوربین جلو </label>
              <select class="form-control">
                <option>1</option>
                <option> 1.5</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>6</option>
                <option>8</option>
                <option>10</option>
                <option>12</option>
                <option>16</option>
                <option>32</option>
                <option>48</option>
              
              </select>
            </div>


            <div class="form-group col-4">
              <label> دوربین پشت </label>
              <select class="form-control">
                <option>1</option>
                <option>1.5</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>6</option>
                <option>8</option>
                <option>10</option>
                <option>12</option>
                <option>16</option>
                <option>32</option>
                <option>48</option>
              </select>
            </div>


            <div class="form-group col-4">
              <label>تعداد سیم کارت </label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
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
              <input type="number" name="count" class="form-control" placeholder="درصد تخفیف ">
            </div>

            <div class="form-group col-8">
              <label>قیمت محصول </label>
              <input type="number" name="count" class="form-control" placeholder="تعداد محصول ">
            </div><br>

            &nbsp &nbsp <label>وضعیت موجودی</label><br>&nbsp &nbsp &nbsp <br>
            
            <div class="form-check">
            
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
              نا موجود
              </label>
            </div>

     

            &nbsp &nbsp <label>پیشنهاد ویژه</label><br>&nbsp &nbsp &nbsp
            
            <div class="form-check">
            
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
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
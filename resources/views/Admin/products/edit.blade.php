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
    
  <form role="form" action="{{route('product.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    
      <div class="card-body" >
        <div class="row">
            <div class="form-group col-6">
              <label>انتخاب کنید</label>
            <input type="text" name="name_fa" class="form-control" placeholder="نام فارسی محصول " value="{{$product->name_fa}}" >
            </div>
        
            <div class="form-group col-6">
              <label>انتخاب کنید</label>
              <input type="text" name="name_en" class="form-control" placeholder="نام انگیلیسی محصول"  value="{{$product->name_en}}">
            </div>

          
            <div class="form-group col-4">
              <label>رنگ محصول</label>
              <select class="form-control"  name="color">
                
                  @foreach ($colors as $item)
                  <option value="{{$item->id}}" {{$product->color_id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group col-4">
              <label>برند</label>
              <select class="form-control"  name="brand">
                @foreach ($cats as $item)
              <option value="{{$item->id}}" {{$product->catgory_id == $item->id ? 'selected' : ''}}>{{$item->title_en}}--{{$item->title_fa}}</option>
                @endforeach
                
              </select>
            </div>

            
            <div class="form-group col-4">
              <label>  حافظه ی داخلی (گیگابایت)</label>
              <select class="form-control"  name="internalMemory">
                <option value="1"   {{$product->internalMemory == '1' ? 'selected' : ''}}> 1</option>
                <option value="1.5" {{$product->internalMemory == '1.5' ? 'selected' : ''}}> 1.5</option>
                <option value="2"   {{$product->internalMemory == '2' ? 'selected' : ''}}>2</option>
                <option value="3"   {{$product->internalMemory == '3' ? 'selected' : ''}}>3</option>
                <option value="4"   {{$product->internalMemory == '4' ? 'selected' : ''}}>4 </option>
                <option value="6"   {{$product->internalMemory == '6' ? 'selected' : ''}}>6 </option>
                <option value="8"   {{$product->internalMemory == '8' ? 'selected' : ''}}>8</option>
                <option value="16"  {{$product->internalMemory == '16' ? 'selected' : ''}}>16 </option>
                <option value="32"  {{$product->internalMemory == '32' ? 'selected' : ''}}>32</option>
                <option value="64"  {{$product->internalMemory == '64' ? 'selected' : ''}}>64</option>
                <option value="128" {{$product->internalMemory == '128' ? 'selected' : ''}}>128</option>
                <option value="512" {{$product->internalMemory == '512' ? 'selected' : ''}}>512</option>
                <option value="1024"{{$product->internalMemory == '1024' ? 'selected' : ''}}>1024</option>
              </select>
            </div>

            <div class="form-group col-4">
              <label> شبکه های ارتباطی </label>
              <select class="form-control"  name="network">
                <option value="2G" {{$product->network == '2G' ? 'selected' : ''}}>2G</option>
                <option value="3G" {{$product->network == '3G' ? 'selected' : ''}}> 3G</option>
                <option value="4G" {{$product->network == '4G' ? 'selected' : ''}}>4G</option>
                <option value="5G" {{$product->network == '5G' ? 'selected' : ''}}> 5G</option>
                
              </select>
            </div>

            
            <div class="form-group col-4">
              <label>RAM (GIG)</label>
              <select class="form-control" name="ram">
                <option value="1"   {{$product->ram == '1' ? 'selected' : ''}}> 1</option>
                <option value="1.5" {{$product->ram == '1.5' ? 'selected' : ''}}> 1.5</option>
                <option value="2"   {{$product->ram == '2' ? 'selected' : ''}}>2</option>
                <option value="3"   {{$product->ram == '3' ? 'selected' : ''}}>3</option>
                <option value="4"   {{$product->ram == '4' ? 'selected' : ''}}>4 </option>
                <option value="6"   {{$product->ram == '6' ? 'selected' : ''}}>6 </option>
                <option value="8"   {{$product->ram == '8' ? 'selected' : ''}}>8</option>
                <option value="10"  {{$product->ram == '10' ? 'selected' : ''}}>10 </option>
                <option value="12"  {{$product->ram == '12' ? 'selected' : ''}}>12</option>
                <option value="16"  {{$product->ram == '16' ? 'selected' : ''}}>16</option>
                
              </select>
            </div>



            <div class="form-group col-4">
              <label> باتری قابل تعویض </label>
              <select class="form-control" name="replace_battry">
                <option value="دارد" {{$product->replace_battry == 'دارد' ? 'selected' : ''}}>دارد</option>
                <option value="ندارد"{{$product->replace_battry == 'ندارد' ? 'selected' : ''}}> ندارد</option> 
              </select>
            </div>

            <div class="form-group col-4">
              <label> اندازه ی صفحه نمایش  </label>
              <select class="form-control" name="screanSize">
                <option value="4"    {{$product->screanSize == '4' ? 'selected' : ''}}>4</option>
                <option value="4.8"  {{$product->screanSize == '4.8' ? 'selected' : ''}}> 4.8</option> 
                <option value="5"    {{$product->screanSize == '5' ? 'selected' : ''}}> 5</option> 
                <option value="5.2"  {{$product->screanSize == '5.2' ? 'selected' : ''}}> 5.2</option> 
                <option value="5.3"  {{$product->screanSize == '5.3' ? 'selected' : ''}}> 5.3</option> 
                <option value="5.5"  {{$product->screanSize == '5.5' ? 'selected' : ''}}>5.5</option> 
                <option value="6"    {{$product->screanSize == '6' ? 'selected' : ''}}> 6</option> 
              </select>
            </div>

            <div class="form-group col-4">
              <label> دوربین جلو </label>
              <select class="form-control" name="front_camera">
                <option value="1"   {{$product->front_camera == '1' ? 'selected' : ''}}> 1</option>
                <option value="1.5" {{$product->front_camera == '1.5' ? 'selected' : ''}}> 1.5</option>
                <option value="2"   {{$product->front_camera == '2' ? 'selected' : ''}}>2</option>
                <option value="3"   {{$product->front_camera == '3' ? 'selected' : ''}}>3</option>
                <option value="4"   {{$product->front_camera == '4' ? 'selected' : ''}}>4 </option>
                <option value="6"   {{$product->front_camera == '6' ? 'selected' : ''}}>6 </option>
                <option value="8"   {{$product->front_camera == '8' ? 'selected' : ''}}>8</option>
                <option value="16"  {{$product->front_camera == '16' ? 'selected' : ''}}>16 </option>
                <option value="32"  {{$product->front_camera == '32' ? 'selected' : ''}}>32</option>
                <option value="48"  {{$product->front_camera == '48' ? 'selected' : ''}}>48</option>
              
              </select>
            </div>


            <div class="form-group col-4">
              <label> دوربین پشت </label>
              <select class="form-control"  name="back_camera" >
                <option value="1"   {{$product->back_camera == '1' ? 'selected' : ''}}> 1</option>
                <option value="1.5" {{$product->back_camera == '1.5' ? 'selected' : ''}}> 1.5</option>
                <option value="2"   {{$product->back_camera == '2' ? 'selected' : ''}}>2</option>
                <option value="3"   {{$product->back_camera == '3' ? 'selected' : ''}}>3</option>
                <option value="4"   {{$product->back_camera == '4' ? 'selected' : ''}}>4 </option>
                <option value="6"   {{$product->back_camera == '6' ? 'selected' : ''}}>6 </option>
                <option value="8"   {{$product->back_camera == '8' ? 'selected' : ''}}>8</option>
                <option value="16"  {{$product->back_camera == '16' ? 'selected' : ''}}>16 </option>
                <option value="32"  {{$product->back_camera == '32' ? 'selected' : ''}}>32</option>
                <option value="48"  {{$product->back_camera == '48' ? 'selected' : ''}}>48</option>
              
              </select>
            </div>


            <div class="form-group col-4">
              <label>تعداد سیم کارت </label>
              <select class="form-control"  name="simNumber">
                <option value="1"   {{$product->simNumber == '1' ? 'selected' : ''}}> 1</option>
                <option value="2"   {{$product->simNumber == '2' ? 'selected' : ''}}>2</option>
                <option value="3"   {{$product->simNumber == '3' ? 'selected' : ''}}>3</option>
                <option value="4"   {{$product->simNumber == '4' ? 'selected' : ''}}>4 </option>
              </select>
            </div>



            <div class="form-group col-4">
              <label>کد محصول </label>
              <input type="number" name="code" class="form-control" placeholder="تعداد محصول " value="{{$product->code}}">
            </div><br>

            <div class="form-group col-4">
              <label>تعداد محصول</label>
              <input type="number" name="count" class="form-control" placeholder="تعداد محصول " value="{{$product->count}}">
            </div>

            <div class="form-group col-4">
              <label>درصد تخفیف</label>
              <input type="number" name="discount" class="form-control" placeholder="درصد تخفیف " value="{{$product->discount}}">
            </div>

           

            
            <div class="form-group col-4">
              <label>آپلود تصاویر </label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$product->imageUrl}}">
              </div>
              <img src="{{$product->imageUrl}}" id="holder" style="margin-top:15px;max-height:100px;">
            </div>

            <div class="form-group col-4">
              <label>قیمت محصول </label>
              <input type="number" name="price" class="form-control" placeholder="تعداد محصول " value="{{$product->price}}">
            </div><br>

            &nbsp &nbsp <label>وضعیت موجودی</label><br>&nbsp &nbsp &nbsp <br>
            
            <div class="form-check">
            
              <input class="form-check-input"  name="status" type="checkbox"  id="defaultCheck1" {{$product->status == '1' ? 'checked' : ''}}>
              <label class="form-check-label" for="defaultCheck1">
               نا موجود 
              </label>
            </div>

     

            &nbsp &nbsp <label>پیشنهاد ویژه</label><br>&nbsp &nbsp &nbsp
            
            <div class="form-check">
            
              <input class="form-check-input" name="best" type="checkbox"  id="defaultCheck2"  {{$product->best == '1' ? 'checked' : ''}}>
              <label class="form-check-label" for="defaultCheck2">
                پیشنهاد ویژه
              </label>
            </div>



            <div class="form-group col-12">
              <label>توضیحات محصول</label>
              <textarea name="body" id="body">{{$product->body}}</textarea>
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
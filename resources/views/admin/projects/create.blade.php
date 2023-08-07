@extends('layouts.dashboard')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <!-- <div class="col-sm-6">
          <h1 class="m-0 text-dark">شاشة المدربين </h1>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">شاشة المدربين</li>
          </ol>
        </div>/.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        

          <div class="card">
            <div class="card-header d-flex" style="text-align: center;">
              <h3 class="card-title" >اضافة مشروع</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="container">
                <form method="POST" action="{{route('projects.store')}}" enctype="multipart/form-data">
                  @csrf
                  @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                  </ul>
                </div>
                @endif
                  <div class="row">
                    <div class="col-md-6">
                      <label for="field1">عنوان المشروع باللغة العربية </label>
                      <input type="text" name="title_ar" value="{{old('title_ar')}}" class="form-control" id="field1">
                    </div>
                    <div class="col-md-6">
                      <label for="field2"> عنوان المشروع باللغة الانجليزية</label>
                      <input type="text" name="title_en" value="{{old('title_en')}}" class="form-control" id="field2">
                    </div>
                   
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-6">
                      <label for="field1">الموقع  باللغة العربية </label>
                      <input type="text" name="location_ar" value="{{old('location_ar')}}" class="form-control" id="field1">
                    </div>
                    <div class="col-md-6">
                      <label for="field2"> الموقع  باللغة الانجليزية </label>
                      <input type="text" name="location_en" value="{{old('location_en')}}" class="form-control" id="field2">
                    </div>
                   
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="field1">لينك الموقع     </label>
                      <input type="text" name="gps" value="{{old('gps')}}" class="form-control" id="field1">
                    </div>
                    <div class="col-md-6">
                      <label for="field1">المدينة</label>
                      <select name="city" id="city" class="form-control">
                        @foreach($cities as $city)
                          <option value="{{ $city->id }}"> {{ $city->name }} </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="field4"> الوصف باللغة العربية </label>
                    
                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea class="textarea" name="description_ar" placeholder="Place some text here"
                                    style="height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          </textarea>
                        </div>
                       
                      </div> 

                    </div>
                   
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <label for="field4"> الوصف باللغة الانجليزية</label>

                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea class="textarea" name="description_en" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                       
                      </div>  

                    </div>
                   
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="field1">صور المشروع      </label>
                      <input type="file" name="images[]" accept="image/*" multiple class="form-control" id="field1">
                    </div>
                   
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="field1"> كتيب المشروع </label>
                      <input type="file" name="prochure" class="form-control" accept="application/pdf" id="field1">
                    </div>
                   
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">تأكيد</button>
                </form>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
 
 
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

</footer>

@endsection
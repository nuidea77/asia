@extends('layout.main')
@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay bg-full  bg-overlay-400 text-white" data-image-src="{{asset('assets/img/9.webp')}}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="display-1 mb-3 text-white">@lang('texts.quality-medicine')</h1>

          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
<div class="container mt-5 gx-6 pt-8">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('error_msg'))
    <div class="alert alert-warning">
        {{ session()->get('error_msg') }}
    </div>
@endif
    <form action="{{ route('login.submit') }}" method="POST"  >
        {{ csrf_field() }}
        <h4>Эмчлүүлэгчийн мэдээлэл /Patient's information/</h4>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Эмчлүүлэгчийн овог, нэр: </label>
                <input name="person" class="form-control" placeholder="Patient's surname, name"  type="text">
            </div>
            <div class="form-group col-sm-4">
                <label>Төрсөн он, сар, өдөр: </label>
                <input name="birthdate" class="form-control " placeholder="Date of Birth"  type="date">
            </div>
            <div class="form-group col-sm-4">
                <label>Нас: </label>
                <input name="age" class="form-control " placeholder="Age"  type="number">
            </div>
            <div class="form-group col-sm-4">
                <label>Хүйс: /Sex/</label>
                <select name="sex" class="selectGender js-states form-control" data-placeholder="эр">
                    <option value="эр">эр</option>
                    <option value="эм">эм</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label>Биеийн жин: </label>
                <input name="weight" class="form-control " placeholder="Weight"  type="number">
            </div>
            <div class="form-group col-sm-4">
                <label>Өндөр: </label>
                <input name="height" class="form-control " placeholder="Height"  type="number">
            </div>



            <div class="form-group col-sm-12">
                <label>Урьд өмнө  гаж нөлөө илэрч байсан эмийн нэр: </label>
                <input name="previousdrugs" class="form-control " placeholder="Previous drugs with side effects"  type="text">
            </div>



        <h4>Эмийн мэдээлэл /Information on drug with side effects/</h4>
             <div class="form-group col-sm-6">
                <label>Худалдааны нэршил: /Trade name/</label>
                <input type="text" id="pill_search" name="name_int" placeholder="Trade name" class="form-control" />
            </div>
            <div class="form-group col-sm-3">
                <label>Худалдаж авсан он сар өдөр: </label>
                <input name="whenbuy" class="form-control " placeholder="Purchased date"  type="date">
            </div>
            <div class="form-group col-sm-3">
                <label>Худалдан авсан газар: </label>
                <input name="wherebuy" class="form-control " placeholder="Purchased place"  type="text">
            </div>
            <div class="form-group col-sm-3">
                <label>Эм үйлдвэрлэгчийн нэр: </label>
                <input name="manufacturename" class="form-control " placeholder="Manufacturer's name"  type="text">
            </div>
            <div class="form-group col-sm-3">
                <label>Улс: </label>
                <input name="country" class="form-control " placeholder="Country"  type="text">
            </div>
            <div class="form-group col-sm-3">
                <label>Савлалтын тун: </label>
                <input name="dosage" class="form-control " placeholder="Packaging dosage"  type="text">
            </div>
            <div class="form-group col-sm-3">
                <label>Хүчинтэй хугацаа: </label>
                <input name="expiredate" class="form-control " placeholder="Valid date"  type="date">
            </div>
            <div class="form-group col-sm-6">
                <label>Цувралын дугаар: </label>
                <input name="serialno" class="form-control " placeholder="Serial No"  type="text">
            </div>
            <div class="form-group col-sm-6">
                <label>Эмийн хэлбэр: /Drug type/</label>
                <select name="formadrugs" class="selectGender js-states form-control" data-placeholder="шахмал">
                    <option value="шахмал">шахмал /tablet/</option>
                    <option value="капсул">капсул /capsule/</option>
                    <option value="тарилга">тарилга /injection/</option>
                    <option value="судсаар сэлбэх шингэн">судсаар сэлбэх шингэн</option>
                    <option value="бусад">бусад /other/</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label>Эм хэрэглэж эхэлсэн он сар өдөр цаг: </label>
                <input name="startdate" class="form-control " placeholder="Medication start date"  type="date">
            </div>
            <div class="form-group col-md-6">
                <label>Эм хэрэглэхийг зогсоосон он сар өдөр цаг: </label>
                <input name="enddate" class="form-control " placeholder="Medication discontinued date"  type="date">
            </div>
            <div class="form-group col-md-6">
                <label>Үндсэн онош: </label>
                <input name="diagnosis" class="form-control " placeholder="Main diagnosis"  type="text">
            </div>
            <div class="form-group col-md-6">
                <label>Эм хэрэглэсэн заалт: </label>
                <input name="usageinstructions" class="form-control " placeholder="Drug insturctions"  type="text">
            </div>
            <div class="form-group col-md-6">
                <label>Нэг удаа хэрэглэсэн тун: </label>
                <input name="onetimedosage" class="form-control " placeholder="One-time dosage"  type="text">
            </div>
            <div class="form-group col-md-6">
                <label>Хоногт хэрэглэсэн тун: </label>
                <input name="daydosage" class="form-control " placeholder="Dosage in a day"  type="text">
            </div>
        </div>

        <h4>Гаж нөлөөний мэдээлэл /Side effects information/</h4>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Гаж нөлөө эхэлсэн он сар өдөр цаг минут: </label>
                <input name="startsideeffectdate" class="form-control " placeholder="Side effect discovered"  type="date">
            </div>
            <div class="form-group col-md-6">
                <label>Илэрсэн гаж нөлөөний хэлбэр: /Side effect symptoms/</label>
                <select class="form-select" multiple aria-label="multiple select example" name="formasideeffect[]" multiple>
                    <option value="Бөөлжих">Бөөлжих /Vomiting/</option>
                    <option value="Дотор муухайрах">Дотор муухайрах /Nausea/</option>
                    <option value="Гүйлгэх">Гүйлгэх /Diarrhea/</option>
                    <option value="Хэвлийгээр өвдөх">Хэвлийгээр өвдөх /Abdominal pain/</option>
                    <option value="Загатнах">Загатнах /Itching/</option>
                    <option value="Арьсны тууралт">Арьсны тууралт /Skin rash/</option>
                    <option value="Толгой өвдөх">Толгой өвдөх  /Headache/</option>
                    <option value="Толгой эргэх, ухаан алдах">Толгой эргэх, ухаан алдах /Dizziness, syncope/</option>
                    <option value="Нойргүйдэх">Нойргүйдэх /Insomnia/</option>
                    <option value="Цус алдах">Цус алдах /Bleeding/</option>
                    <option value="Анафилакси">Анафилакси /Anaphylaxis/</option>
                    <option value="Амьсгал давчдах">Амьсгал давчдах /Shortness of breath/</option>
                    <option value="Зүрх дэлсэх">Зүрх дэлсэх</option>
                    <option value="Арьс, салст шарлах">Арьс, салст шарлах /Yellow skin/</option>
                    <option value="Шээсний гарц, өнгөний өөрчлөлт">Шээсний гарц, өнгөний өөрчлөлт /Change in urine color and amount/</option>
                    <option value="Нүүр, уруул, хэл хавагнах">Нүүр, уруул, хэл хавагнах /Swelling of face, Lips or tongue/</option>
                    <option value="Гар, хөл бадайрах">Гар, хөл бадайрах /Numbness/</option>
                    <option value="Уналт, таталт">Уналт, таталт /Seizure/</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Илэрсэн гаж нөлөөний шинж тэмдгийг дэлгэрэнгүй бичнэ үү: </label>
                <textarea name="writetext" class="form-control " placeholder="List detailed symptoms of side effect"  type="text"></textarea>
            </div>
        </div>
        <input type="submit" class="mt-8 float-end btn btn-primary rounded-pill btn-send mb-3" value="@lang('texts.send')">


</form>
</div>


@stop

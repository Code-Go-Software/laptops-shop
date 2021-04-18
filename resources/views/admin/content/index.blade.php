@extends('admin.layouts.layout')

@section('title', 'إدارة المحتوى')

@section('content')

  <div class="col-12">
    <h2>إدارة المحتوى</h2>
  </div>
  <div class="col-12">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="main-info-tab" data-toggle="tab" href="#main-info" role="tab" aria-controls="main-info" aria-selected="true">المعلومات الأساسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="sliders-tab" data-toggle="tab" href="#sliders" role="tab" aria-controls="sliders" aria-selected="false">الصور الإعلانية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="about-us-tab" data-toggle="tab" href="#about-us" role="tab" aria-controls="about-us" aria-selected="false">حولنا</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
        <div class="row mt-4">

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="address">عنوان الشركة</label>
                <input type="text" id="address" class="form-control rounded-pill border-dark" placeholder="دمشق - البحصة - جانب جامع الورد">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="phone">رقم الهاتف</label>
                <input type="text" id="phone" class="form-control rounded-pill border-dark" placeholder="0946918650">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="fixed-phone">رقم الهاتف الثابت</label>
                <input type="text" id="fixed-phone" class="form-control rounded-pill border-dark" placeholder="211-115-12">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="email">بريد المساعدة</label>
                <input type="text" id="email" class="form-control rounded-pill border-dark" placeholder="info@company.com">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="facebook">رابط صفحة الفيسبوك</label>
                <input type="text" id="facebook" class="form-control rounded-pill border-dark" placeholder="https://www.facebook.com">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="telegram">رابط قناة التلغرام</label>
                <input type="text" id="telegram" class="form-control rounded-pill border-dark" placeholder="https://www.telegram.com">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="whatsapp">رقم التواصل واتساب</label>
                <input type="text" id="whatsapp" class="form-control rounded-pill border-dark" placeholder="0946918650">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

        </div>
      </div>

      <div class="tab-pane fade show" id="sliders" role="tabpanel" aria-labelledby="sliders-tab">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <form action="" method="post">
              <div class="form-group mt-4">
                <h4>الصورة الأولى</h4>
              </div>
              <div class="form-group text-center">
                <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
              </div>
              <div class="form-group text-center">
                <button class="btn btn-primary rounded-pill mt-2"><i class="lni lni-image"></i> اختيار صورة جديدة</button>
                <button class="btn btn-info rounded-pill mt-2"><i class="lni lni-save"></i> حفظ</button>
              </div>
            </form>
          </div>

          <div class="col-lg-9 mt-4">
            <form action="" method="post">
              <div class="form-group mt-4">
                <h4>الصورة الثانية</h4>
              </div>
              <div class="form-group text-center">
                <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
              </div>
              <div class="form-group text-center">
                <button class="btn btn-primary rounded-pill mt-2"><i class="lni lni-image"></i> اختيار صورة جديدة</button>
                <button class="btn btn-info rounded-pill mt-2"><i class="lni lni-save"></i> حفظ</button>
              </div>
            </form>
          </div>

          <div class="col-lg-9 mt-4">
            <form action="" method="post">
              <div class="form-group mt-4">
                <h4>الصورة الثالثة</h4>
              </div>
              <div class="form-group text-center">
                <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
              </div>
              <div class="form-group text-center">
                <button class="btn btn-primary rounded-pill mt-2"><i class="lni lni-image"></i> اختيار صورة جديدة</button>
                <button class="btn btn-info rounded-pill mt-2"><i class="lni lni-save"></i> حفظ</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="about-us" role="tabpanel" aria-labelledby="about-us-tab">
        <div class="py-3 px-4">
          <p>
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
          </p>
          <form action="" method="post">
            <div class="form-group">
              <label for="description"><b>تعديل المقال</b></label>
              <textarea id="description" class="form-control rounded border-dark" cols="30" rows="10" placeholder="مقال تعريفي عن الشركة"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
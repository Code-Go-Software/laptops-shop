@extends('admin.layouts.layout')

@section('title', 'عرض بيانات الحاسوب')

@section('content')

  <div class="col-12">
    <h2>إدارة الحواسيب > عرض بيانات الحاسوب</h2>
  </div>
  <section id="product" class="py-3 px-2 mt-3 col-12">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12 col-md-6">
          <div class="text-center">
            <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid" id="main-image">
          </div>
          <div class="thumbs d-flex justify-content-center align-items-center mt-2">
    
            @forelse ($laptop->subImages as $image)
              <div class="text-center">
                <img src="{{ asset('images/' . $image->image) }}" onclick="swapImage(this, '#main-image')" class="img-fluid rounded shadow mx-2" style="max-width: 150px;">
              </div>
            @empty
                <div class="col-12 text-center">
                  لا يوجد أي صور فرعية لهذا الحاسوب
                </div>
            @endforelse
    
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="text-center mt-3">
            <h1 class="text-primary">{{ $laptop->name }}</h1>
            <h2 class="mb-3">
              <span class="text-danger font-weight-bold"><bdi>s.p</bdi> {{ $laptop->afterDiscountPrice() }}</span>
              <strike class="text-secondary h4"><small><bdi>s.p</bdi> {{ $laptop->beforeDiscountPrice() }}</small></strike>
            </h2>
          </div>
          <div class="col-12 text-center mt-4">
            <a href="/admin/laptops/{{ $laptop->id }}/edit" class="btn bg-info text-light"><i class="lni lni-pencil"></i> تعديل البيانات</a>
            <form action="/admin/laptops/{{ $laptop->id }}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn bg-danger text-light delete-btn"><i class="lni lni-trash"></i> حذف الحاسوب</button>
            </form>
          </div>
          <div class="text-center mt-3">
            <span class="badge bg-primary text-light">
              <i class="lni lni-tag"></i> {{ $laptop->category->name }}
            </span>
            <span class="badge bg-warning text-dark">
              <i class="lni lni-eye"></i> {{ $laptop->views }}
            </span>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-6 col-md-4">
              <div><b>اسم المنتج</b></div>
              <span class="text-secondary">{{ $laptop->name }}</span>
              <div><b>السعر قبل التخفيض</b></div>
              <span class="text-secondary"><bdi>USD</bdi> {{ $laptop->before_discount_price }}</span>
              <div><b>السعر بعد التخفيض (سعر المبيع)</b></div>
              <span class="text-secondary"><bdi>USD</bdi> {{ $laptop->after_discount_price }}</span>
              <div><b>الشركة المصنعة</b></div>
              <span class="text-secondary">{{ $laptop->company }}</span>
              <div><b>المعالج</b></div>
              <span class="text-secondary">{{ $laptop->cpu }}</span>
              <div><b>الرامات</b></div>
              <span class="text-secondary">{{ $laptop->ram }}</span>
              <div><b>كرت الشاشة</b></div>
              <span class="text-secondary">{{ $laptop->screen_card }}</span>
            </div>
            <div class="col-6 col-md-4">
              <div><b>نوع كرت الشاشة</b></div>
              <span class="text-secondary">{{ $laptop->screen_card_type }}</span>
              <div><b>قياس الشاشة</b></div>
              <span class="text-secondary">{{ $laptop->screen_size }}</span>
              <div><b>السواقة</b></div>
              <span class="text-secondary">{{ $laptop->cd_driver }}</span>
              <div><b>البطارية</b></div>
              <span class="text-secondary">{{ $laptop->battery }}</span>
              <div><b>المداخل</b></div>
              <span class="text-secondary">{{ $laptop->ports }}</span>
              <div><b>الهارد</b></div>
              <span class="text-secondary">{{ $laptop->hard }}</span>
              <div><b>تفاصيل</b></div>
              <span class="text-secondary">{{ $laptop->description }}</span>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </section>

@endsection
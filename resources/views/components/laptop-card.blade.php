<div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
  <div class="product text-center shadow h-100">
    <div class="header text-left">
      <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> {{ $laptop->views }}</small>
    </div>
    <div class="image">
      <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid rounded">
    </div>
    <div class="data px-2 pb-1">
      <a href="laptops/{{ $laptop->id }}/{{ $laptop->name }}" class="text-dark font-weight-bold">{{ $laptop->name }}</a>
      <div class="d-flex w-100">
        <div class="flex-grow-1">
          <form action="/cart" method="POST">
            @csrf
            <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
            <button class="btn" type="submit">
              <i class="lni lni-cart"></i> <small class="d-none d-md-inline">إضافة للسلة</small>
            </button>
          </form>
        </div>
        <div class="flex-grow-1">
          <form action="/favourites" method="POST">
            @csrf
            <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
            <button class="btn" type="submit">
              <i class="lni lni-heart text-danger"></i> <small class="d-none d-md-inline">إضافة للمفضلة</small>
            </button>
          </form>
        </div>
      </div>
      <span class="text-success font-weight-bold"><bdi>s.p</bdi> {{ $laptop->afterDiscountPrice() }}</span>
      <br>
      <strike class="text-secondary"><small><bdi>s.p</bdi> {{ $laptop->beforeDiscountPrice() }}</small></strike>
    </div>
  </div>
</div>
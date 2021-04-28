<!--
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
-->

<div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
  <div class="card">
    <div class="view zoom overlay">
      <img class="img-fluid w-100" src="{{ asset('images/' . $laptop->image) }}">
      <p class="mb-0"><span class="badge badge-secondary badge-pill badge-news"><i class="lni lni-eye"></i> {{ $laptop->views }}</span></p>
    </div>
    <div class="card-body text-center">
      <h5><a class="text-dark" href="/laptops/{{ $laptop->id }}/{{ $laptop->name }}">{{ $laptop->name }}</a></h5>
      <p class="small text-muted text-uppercase mb-2">{{ $laptop->type }}</p>
      <h6 class="mb-3">
        <span class="text-success mr-1"><bdi>s.p</bdi>  {{ $laptop->afterDiscountPrice() }}</span>
        <strike class="text-secondary"><small><bdi>s.p</bdi>  {{ $laptop->beforeDiscountPrice() }}</small></strike>
      </h6>
      <form action="/cart" class="d-inline" method="POST">
        @csrf
        <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
        <button type="submit" class="btn btn-primary btn-sm mr-1 mb-2">
          <i class="lni lni-cart pl-2"></i>إضافة للسلة
        </button>
      </form>
      <form action="/favourites" class="d-inline" method="POST">
        @csrf
        <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
        <button type="submit" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
        data-toggle="tooltip" data-placement="top"
        title="إضافة للمفضلة">
          <i class="lni lni-heart"></i>
        </button>
      </form>
    </div>
  </div>
</div>
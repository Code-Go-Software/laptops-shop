<!DOCTYPE html>
<html lang="en">

<head>
  <title>تسجيل الدخول</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-css/LineIcons.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
  <style>
    body{
      font-family: 'Almarai', sans-serif;
    }
  </style>
</head>

<body dir="rtl">

  <div class="container-fluid">
    <div class="row justify-content-center mt-5">
      <div class="col-4 mt-5">
        <h1>تسجيل الدخول</h1>
        <form action="/login" method="POST">
          @csrf
          <div class="form-group">
            <label for="email"><i class="lni lni-envelope"></i> البريد الإلكتروني</label>
            <input type="text" name="email" id="email" class="form-control border border-dark" placeholder="user@email.com">

            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="password"><i class="lni lni-eye"></i> كلمة السر</label>
            <input type="password" name="password" id="password" class="form-control border border-dark" placeholder="********">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary rounded-pill" type="submit">
                تسجيل الدخول
            </button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    <style>
        .mtop10 {
            margin-top: 10px;
        }

        .mtop20 {
            margin-top: 20px;
        }

        .padding15 {
            padding: 15px;
        }

        .center {
            margin: auto;
            text-align: center;
        }
        /* ==============================================================
   GLOBAL STYLES
   ============================================================== */
body {
  font-family: 'Roboto', sans-serif; }

h1 {
  font-size: 72px;
  color: #fff;
  font-weight: 300; }
  @media (max-width: 1200px) {
    h1 {
      font-size: 52px; } }
  @media (max-width: 992px) {
    h1 {
      font-size: 40px; } }

h2 {
  font-size: 47px; }
  @media (max-width: 768px) {
    h2 {
      font-size: 34px; } }

h3 {
  font-size: 35px; }
  @media (max-width: 992px) {
    h3 {
      font-size: 30px; } }

h4 {
  font-size: 30px; }

h5 {
  font-size: 28px; }
  @media (max-width: 768px) {
    h5 {
      font-size: 22px; } }

h6 {
  font-size: 21px;
  font-weight: 400; }

p {
  font-size: 15px; }

.main-block {
  padding: 90px 0; }
  @media (max-width: 768px) {
    .main-block {
      padding: 45px 0; } }

.light-bg {
  background: #f3f4f7; }

.dark-bg {
  background: #252a33; }

    </style>
  
</head>
<body>
@include('inc.navbar')

        @include('inc.messages')
        @yield('content')


<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</body>
</html>

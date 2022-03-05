<!DOCTYPE html>
<!--
Use below html tag for RTL version
<html lang="en" dir="rtl" direction="rtl" style="direction: rtl">
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="https://smart-investment.test/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700|Material+Icons" rel="stylesheet">
    <link href="/css/app.css" type="text/css" rel="stylesheet"/>
    <title>Metronic | Vue Demo</title>
  </head>
  <body>
    <noscript>
      <strong>We're sorry but metronic-vue doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    <!-- built files will be auto injected -->
    <script src="/js/app.js" type="text/javascript"></script>
  </body>
</html>

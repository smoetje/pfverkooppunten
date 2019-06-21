<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>GoogleMaps Verkooppunten beheer</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/vendor/smoetje/pfverkooppunten/css/verkooppunten-app.css">

</head>
<body>
<div class="container-fluid" id="app">
  <router-view></router-view>
</div>
</body>
<script src="/vendor/smoetje/pfverkooppunten/js/verkooppunten-app.js"></script>
</html>

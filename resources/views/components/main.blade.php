<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    
   @vite (['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <x-navbar></x-navbar>
    {{$slot}}
    
    
   
  </body>
</html>
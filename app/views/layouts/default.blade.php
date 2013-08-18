<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>

    {{ HTML::style('//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css') }}
    {{ HTML::script('//code.jquery.com/jquery-1.9.1.js') }}
    {{ HTML::script('//code.jquery.com/ui/1.10.3/jquery-ui.js') }}

    {{ HTML::style('css/main.css') }}
    {{ HTML::script('js/main.js') }}

</head>
<body>
<div class="page">

@if(Session::has('response'))
  <div class="flash-message {{ Session::get('response.class') }}">
    {{ Session::get('response.message') }}
  </div>
@endif

{{ $content }}
</div>
</body>
</html>
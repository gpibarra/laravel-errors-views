<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ config('app.name', 'Laravel') }} Error @yield('codeError')</title>

    @yield('before_styles')

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #B0BEC5;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
      }

      .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
      }

      .content {
        text-align: center;
        display: inline-block;
      }

      .title {
        font-size: 156px;
      }

      .quote {
        font-size: 36px;
      }

      .explanation {
        font-size: 24px;
      }
    </style>
    @yield('after_styles')
  </head>
  <body>
    <div class="container">

      <div class="content">
        <div class="title">@yield('codeError')</div>
        <div class="quote">
            @if(View::hasSection('codeError')) 
                {{ trans("laravel-error-views.".trim($__env->yieldContent('codeError'))."_Description") }}
            @else
                @lang('laravel-error-views.Undefined_Desciption')
            @endif
        </div>
      </div>

      @include('errors.inc.exception')

    </div>
  </body>
</html>

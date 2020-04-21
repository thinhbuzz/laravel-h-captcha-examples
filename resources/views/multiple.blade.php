<!doctype html>
<html lang="{{ app()->getLocale() }}">
{{ app('captcha')->multiple() }}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" id="form-1">
    @csrf
    {!! app('captcha')->display(['id' => 'captcha_1']) !!}
    {{--    {!! app('captcha')->display([], ['multiple' => true]) !!}--}}
    <button type="submit">Submit</button>
</form>
<form method="post" id="form-2">
    @csrf
    {!! app('captcha')->display() !!}
    {{--    {!! app('captcha')->display([], ['multiple' => true]) !!}--}}
    <button type="submit">Submit</button>
</form>
{!! app('captcha')->displayMultiple() !!}
{{--{!! app('captcha')->displayMultiple(['multiple' => true]) !!}--}}
{!! app('captcha')->displayJs() !!}
<button id="reset_1">Reset 1</button>
<button id="reset_all">Reset all</button>
<script>
    var reset1 = document.querySelector('#reset_1');
    if (reset1) {
        reset1.addEventListener('click', () => {
            {{app('captcha')->getJsVariableName()}}.reset({{app('captcha')->getWidgetIdName()}}['captcha_1'])
        });
    }
    var resetAll = document.querySelector('#reset_all');
    if (resetAll) {
        resetAll.addEventListener('click', () => {
            for (var captcha in buzzNoCaptchaWidgetIds) {
                if (buzzNoCaptchaWidgetIds.hasOwnProperty(captcha)) {
                    {{app('captcha')->getJsVariableName()}}.reset(buzzNoCaptchaWidgetIds[captcha])
                }
            }
        });
    }
</script>
</body>
</html>

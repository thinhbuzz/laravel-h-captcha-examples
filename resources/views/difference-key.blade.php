<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
<form method="post">
    @csrf
    {!! app('captcha')->display([], ['sitekey' => env('CAPTCHA_SITEKEY2')]) !!}
    <button type="submit">Submit</button>
</form>
<button id="reset">Reset</button>
<script>
    var reset = document.querySelector('#reset');
    if (reset) {
        reset.addEventListener('click', () => {
            {{app('captcha')->getJsVariableName()}}.reset()
        });
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <style>
        body{
            margin: 0;
        }
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }
    </style>
    @php
        $theme='dark';
    @endphp
    <link rel="stylesheet" href="assets/theme/{{$theme}}.css">
</head>
<body>
<main>
    @php
        $number=27;
        $name="my page";    
    @endphp
    <section>
        <h1> 
            @lang('jkono.var',['number'=>$number,'auth'=>$name])
        </h1>


        <form action="{{url('/')}}" method="post">@csrf
            <select name="lang" onchange="this.form.submit()">
                @if (session('lang')=='en')
                <option value="en" selected>English</option>
                <option value="bn">Bangla</option>
                @else
                <option value="en">English</option>
                <option value="bn" selected>Bangla</option>
                @endif

            </select>
        </form>


    </section>
</main>
</body>
</html>





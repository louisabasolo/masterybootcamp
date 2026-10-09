<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    {{-- @if (session('user'))
        <div>
            <h1>
                Welcome MR. {{ session('user') }}
            </h1>
        </div>
    @endif --}}
    <div class="form-box">
        @if ($count === 20)
            <h2>
                Count is 20
            </h2>
        @else
            <h2>
                It is NOT 20
            </h2>
        @endif

        @unless ($count === 0)
            <h2>It is FALSE</h2>
        @endunless

        @isset($count)
            <h2>There is a count</h2>
        @endisset

        @empty($count)
            <h2>There is no count</h2>
        @endempty

        @switch($count)
            @case(20)
                <h2>It is 20</h2>
            @break

            @case(10)
                <h2>It is 10</h2>
            @break

            @default
                <h2>It is not 20 nor 10</h2>
        @endswitch

        {{-- @for ($count = 0; $count < 10; $count++)
            <p>Number {{ $count }}</p>
        @endfor --}}

        <?php $num = 0; ?>
        @while ($num < 5)
            <p>hello</p>
            <?php $num++; ?>
        @endwhile

        @foreach ($users as $user)
            {{ $user }}
        @endforeach

        <div>
            @foreach ($items as $item)
                {{-- {{ $loop->first }} --}}
                @if ($loop->last)
                    <p>hey I am {{ $item }}</p>
                @endif
            @endforeach
        </div>

        @php
            $isActive = true;
        @endphp

        <div>
            <h1>Conditional Classes</h1>
            <div @class(['red' => $isActive])>
                <p>Hey there. How are you?</p>
            </div>
            <p @style(['background: black; color: white; padding: 10px' => $isActive])>Conditional Style</p>
        </div>

        @include('list')

        @includeIf('nav')
    </div>
</body>

</html>

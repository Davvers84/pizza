@if (count($menus) > 0)
    <ul>
        @foreach ($menus as $menu)
            <li>{{ $menu }}</li>
            @foreach ($menu->pizzas() as $pizza)
                <li>{{ $pizza }}</li>
                @foreach ($pizza->pizza() as $thisPizza)
                    <li>{{ $thisPizza }}</li>
                    {{--<ul>--}}
                        {{--<li>{{ $thisPizza }}</li>--}}
                    {{--</ul>--}}
                @endforeach
            @endforeach
        @endforeach
    </ul>
@endif
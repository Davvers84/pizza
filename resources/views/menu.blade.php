@if (count($menus) > 0)
    <ul>
        @foreach ($menus as $menu)
           <li>{{ $menu['menu_name'] }}</li>
            @foreach ($menu->pizzas()->get() as $pizza)
                @foreach ($pizza->pizza()->get() as $thisPizza)
                    <li>&nbsp;&nbsp;&nbsp;
                    @foreach ($thisPizza->dough()->get() as $dough)
                        {{ $dough['dough_base_size_inches'] }}"
                        @if ($dough['dough_stuffed_crust'])
                            Stuffed Crust&nbsp;
                        @endif
                        {{ $dough['dough_name'] }}
                        {{ $thisPizza['pizza_name'] }}&nbsp;
                        (&pound;{{ ($thisPizza['pizza_base_price'] + $dough['dough_extra_price']) }})</li>
                    @endforeach
                @endforeach
            @endforeach
        @endforeach
    </ul>
@endif
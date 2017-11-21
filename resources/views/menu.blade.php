@if (count($menus) > 0)
    <ul>
        @foreach ($menus as $menu)
            <li>{{ $menu }}</li>
        @endforeach
    </ul>
@endif
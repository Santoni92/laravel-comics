<header>
    <nav>
        <div class="container">
            <img src="/images/dc-logo.png" alt="DC Logo">
            <div class="menu-nav">
                <ul>
                    @foreach($linksHeader as $link)
                    <li>
                    @if($link['active'])
                        <a href="{{ $link['url'] }}" class="active">{{ $link['text'] }}</a>
                    @else
                    <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
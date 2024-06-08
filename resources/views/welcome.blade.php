<x-main>
    <ul>
        @foreach ($data as $item)
            <li>
                <h4>{{ $item['mal_id'] }}: <a href="{{route('category',$item['mal_id'])}}">{{ $item['name'] }}</a></h4>
                <p>
                    Count: <a href="{{ $item['url'] }}">{{ $item['count'] }}</a>
                </p>
            </li>
        @endforeach
    </ul>
</x-main>

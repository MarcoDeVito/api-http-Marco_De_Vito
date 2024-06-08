<x-main>
    <ul>
        @foreach ($data as $item)
            <li>
                <h4>{{ $item['mal_id'] }}: <a href="{{route('details',$item['mal_id'])}}">{{ $item['title'] }}</a></h4>
                <p>
                    Episodes: <a href="">{{ $item['episodes'] }}</a>
                </p>
            </li>
        @endforeach
    </ul>
</x-main>
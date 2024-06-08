<x-main>
    <div class="controller ms-5">
        <h1><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></h1>
        <img src="{{$item['images']['jpg']['image_url']}}" alt="immagine_anime">
            <p>
                Episodes: <a href="">{{ $item['episodes'] }}</a>
            </p>
    </div>
</x-main>
<div>
    @foreach ($naisedSubCollection as $collection)
    <a href="{{ route('collection.view', $collection->defaultUrl->slug) }}">{{ $collection->translateAttribute('name') }}</a>
    @endforeach
</div>
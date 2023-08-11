<div>
    <h1>Welcome to my shop!</h1>
    <p>Here are our products:</p>
    <ul>
        @forelse($catalogs as $catalog)
        <li>
            {{$catalog->id}} | {{$catalog->nama}} | {{$catalog->harga}}
        </li>
        @empty
        <p>No data</p>
        @endforelse
    </ul>
</div>
<div id="card-area" style=
'display: grid; 
grid-template-columns: repeat(auto-fill, minmax({{$span}}rem, 1fr));
'>

    @foreach ($products as $product)
        <div class='card'>
            <div class='crd-layout'>
                {{-- IMAGE --}}
                <div class='crd-image'>
                    <img
                        src='https://cdn.statically.io/gh/brwncreative/Fresh2GoHub/main/resources/images/Long%40300x.webp'>
                    </img>
                </div>

                {{-- TAGS --}}
                <div class='crd-tags'>
                    @foreach ($product->tags as $tag)
                        <div class='tag-{{ $tag }}'> {{ $tag }} </div>
                    @endforeach
                </div>

                {{-- NAME --}}
                <div class='crd-item {{ $product->item_name }}'>{{ $product->provider }} - {{ $product->item_name }}
                </div>

                {{-- CONTROLS --}}
                <div class='crd-controls'>
                    <div class='price'> {{ $product->price }} / {{ $product->metric }}</div>
                    <div class='buttons'> <i class='bi bi-plus-circle h2'></i>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

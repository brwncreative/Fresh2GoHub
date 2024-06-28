<div id="search" class="nav-element">
    <div id="s-bar">
        <form action="">
            @csrf <!-- {{ csrf_field() }} -->
            <input placeholder="Lets eat!" name="search" wire:model.live="type" wire:change="clickAway()"></input>
            <div id="s-filter">
                <i class="bi bi-filter"></i>
                Filter
            </div>
        </form>
    </div>


    @if (sizeof($products) > 0)
        <div id="s-results-wrapper">
            <div id="s-results">
                @foreach ($products as $product)
                    <div class="result">
                        <p>{{ $product->item_name }}</p>
                        <small>{{ $product->description }}</small>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

</div>

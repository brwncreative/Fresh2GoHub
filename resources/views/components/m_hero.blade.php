<div id="hero">
    {{-- Carousel --}}
    <div id="c-wrapper">
        <div id="c-inner">
            <div id="c-content">
                <p id="cc-title">Join our <br> mailing list</p>
                <p>Get exclusive deals, promotions and more</p>
            </div>
            <div id="c-controls">
                <form action="{{ route('subscribe', ['case' => 'specific']) }}" method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div id="c-input-area">
                        <input id="c-input" placeholder="E-mail" name="email"></input>
                    </div>
                    <button id="c-btn" type="submit"> Subscribe </button>
                </form>
            </div>
        </div>
    </div>

    <div id="ft-products" class="section">
        <div id="ft-p-wrapper">
            @livewire('productcard', ['limiter' => 2, 'category' => 'veggie', 'span' => 10])
        </div>
    </div>
</div>

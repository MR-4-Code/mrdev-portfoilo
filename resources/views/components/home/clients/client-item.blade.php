<div class="carousel-item {{ $isActive ? 'active' : '' }}">
    <a href="{{ $client['link'] }}" target="_blank">

        <img src="{{ url($client['img']) }}" class="d-block carousel-image mx-auto" alt="{{ $client['title'] }}">
        <div class="carousel-caption d-none d-md-block text-gradient-shadow">
            <h5 class="card-title">{{ $client['title'] }}</h5>
            <p class="card-text">{{ $client['desc'] }}</p>
        </div>
    </a>

</div>

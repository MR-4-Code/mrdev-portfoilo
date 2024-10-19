<header x-data = "{navbarOpen: false}" class="site-header sticky-top ">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white shadow-sm p-3 mb-5" id="navbarNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ url('/img/logo.png') }}" alt="Mr Dev" width="50" height="50"
                    class="d-inline-block align-text-top">
            </a>
            <div class="text-center d-flex align-items-center justify-content-center">
                <a class="navbar-brand" href="/">
                    <span class="navbar-brand mb-0 h3">Mr. Dev</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($navItems as $item)
                        <x-layout.navebar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navebar-item>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>

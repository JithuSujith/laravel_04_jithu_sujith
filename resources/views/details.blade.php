<x-layout>
    <x-navbar />

    <main class="container my-5">
        <div class="row justify-content-center">
            <article class="col-12 d-flex flex-column align-items-center">

                <h1 class="text-center">
                    {{ $article['name'] }}
                </h1>

                <p class="text-muted text-center">
                    {{ $article['category'] }}
                </p>

                <img
                    src="{{ asset($article['image']) }}"
                    alt="{{ $article['name'] }}"
                    class="img-fluid rounded detail"
                >

                <div class="story text-center w-100 mt-4 ms-5">
                    <p>
                        {{ $article['story'] }}
                    </p>
                </div>

                <a href="{{ url()->previous() }}"
                   class="btn btn-outline-dark mt-3 align-self-start ms-5">
                    Back to articles
                </a>

            </article>
        </div>
    </main>
</x-layout>
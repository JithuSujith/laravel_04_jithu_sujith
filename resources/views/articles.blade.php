<x-layout>
    <x-navbar />
    <main>
        <section>
            <div class="container ">

    <h1 class="mb-4">{{$category}}</h1>

    <div class="row d-flex justify-content-center">
        @foreach ($articles as $article)
            <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div class="card h-100 ">
                    <a href="{{ route('detail', ['id'=>$article['id']]) }}"><img
                        src="{{ asset($article['image']) }}"
                        class="card-img-top"
                        alt="{{ $article['name'] }}"
                    ></a>

                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $article['name'] }}
                        </h5>

                        <p class="card-text">
                            {{ $article['description'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
        </section>
    </main>
</x-layout>
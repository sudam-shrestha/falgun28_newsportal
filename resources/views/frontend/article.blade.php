<x-frontend-layout>
    <section>
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-7 space-y-5">
                    <p>
                        {{ $article->views }}
                    </p>

                    <h1 class="text-3xl font-bold">
                        {{ $article->title }}
                    </h1>

                    <img src="{{ asset($article->image) }}" alt="">

                    <div class="text-justify custom">
                        {!! $article->content !!}
                    </div>
                </div>

                <div class="col-span-5">
                    @foreach ($advertises as $advertise)
                        @if ($advertise->location == 'article')
                            <a href="{{ $advertise->redirect_url }}" target="_blank">
                                <img class="h-[50px] md:h-[80px] lg:h-[100px]" src="{{ asset($advertise->image) }}"
                                    alt="">
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>

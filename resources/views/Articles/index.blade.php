{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                                <h2
                                    class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                                    Articles</h2>
                                @if (count($articles) == 0)
                                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">There is no
                                        Articles yet.</p>
                                @endif
                            </div>
                            <div class="grid gap-8 lg:grid-cols-2">

                                @forelse($articles as $article)
                                    <article
                                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                        <div class="flex justify-between items-center mb-5 text-gray-500">
                                            <span
                                                class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                                {{ $article->published ? 'Published' : 'Draft' }}
                                            </span>
                                            <span class="text-sm">{{ $article->created_at->diffForHumans() }}</span>
                                        </div>
                                        <h2
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            <a href="#">{{ $article->title }}</a>
                                        </h2>
                                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                            {!! html_entity_decode(substr($article->content, 0, 200)) !!}</p>
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center space-x-4 space-y-2">
                                                <img class="w-7 h-7 rounded-full"
                                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                                    alt="avatar" />
                                                <span class="font-medium dark:text-white">
                                                    {{ $article->user->name }}
                                                </span>
                                            </div>
                                            <div class="flex space-x-2">
                                                <a href="{{ route('articles.show', $article->id) }}"
                                                    class=" items-right font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                                    show
                                                </a>
                                                <a href="{{ route('articles.edit', $article->id) }}"
                                                    class=" items-right font-medium text-yellow-400 dark:text-yellow-300 hover:underline">
                                                    edit
                                                </a>
                                                <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                <button type="submit"
                                                    class=" items-right font-medium text-red-600 dark:red-500 hover:underline"
    
                                                    data-te-ripple-init data-te-ripple-color="light">
                                                    delete
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                    </article>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
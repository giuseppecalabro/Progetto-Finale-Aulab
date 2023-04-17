<x-layout>
    <x-slot name="title">{{ __('ui.confRevTitle') }}</x-slot>

    <section class="container-fluid bgLightGrey">
        <div class="row min-vh-100 m-0 align-items-center text-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <h1 class="formatTitlePages">ANNULLA L'ULTIMA OPERAZIONE</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('ui.title') }}</th>
                                    <th scope="col">{{ __('ui.seller') }}</th>
                                    <th scope="col">{{ __('ui.status') }}</th>
                                    <th scope="col">{{ __('ui.acceptDeny') }}</th>
                                </tr>
                            </thead>
                            @foreach ($articles as $article)
                                <tbody>
                                    <tr>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->user->name }}</td>
                                        @if ($article->is_accepted == 1)
                                        <td>{{ __('ui.accepted') }}</td>  
                                        @else
                                        <td>{{__('ui.denied')}}</td>
                                        @endif
                                        <td>
                                            @if ($article->is_accepted == 1)
                                                <form action="{{ route('rejectArticle', ['article' => $article]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button type="submit"
                                                        class="btn btn-danger">{{ __('ui.deny') }}</button>
                                                </form>
                                            @else
                                                <form action="{{ route('acceptArticle', ['article' => $article]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button type="submit"
                                                        class="btn btn-success">{{ __('ui.accept') }}</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            {{-- PAGINAZIONE --}}
            <div class="d-flex justify-content-center my-5">
                {{ $articles->links() }}
            </div>
            {{-- END PAGINAZIONE --}}
        </div>
        <x-footer/>
    </section>
</x-layout>

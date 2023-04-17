<div class="row  m-0 align-items-center">
    <div class="col-12 col-md-8 d-flex align-items-center pt-5 flex-column bgArticle min-vh-100">
        <h2 class="text-center my-5 formatTitlePages">{{ __('ui.insertYourAnnouncement') }}</h2>
        <div class="col-12 col-md-10">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    {{-- seleziona categoria inglese --}}
                    @if (__('ui.selectCategory') == '--Select a category--')
                        <label class="form-label textWhiteSmoke">{{ __('ui.category') }}</label>
                        <select class="form-control @error('category') is-invalid @enderror inputAdd"
                            wire:model.defer="category" name="category">
                            <option value="" selected>{{ __('ui.selectCategory') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    @endif

                    {{-- seleziona categoria italiano --}}
                    @if (__('ui.selectCategory') == '--Seleziona una categoria--')
                        <label class="form-label textWhiteSmoke">{{ __('ui.category') }}</label>
                        <select class="form-control @error('category') is-invalid @enderror inputAdd"
                            wire:model.defer="category" name="category">
                            <option value="" selected>{{ __('ui.selectCategory') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nameit }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    @endif

                    {{-- seleziona categoria spagnolo --}}
                    @if (__('ui.selectCategory') == '--Seleccione una categoría--')
                        <label class="form-label textWhiteSmoke">{{ __('ui.category') }}</label>
                        <select class="form-control @error('category') is-invalid @enderror inputAdd"
                            wire:model.defer="category" name="category">
                            <option value="" selected>{{ __('ui.selectCategory') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->namees }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    @endif

                    {{-- seleziona categoria giapponese --}}
                    @if (__('ui.selectCategory') == '--カテゴリを選択します--')
                        <label class="form-label textWhiteSmoke">{{ __('ui.category') }}</label>
                        <select class="form-control @error('category') is-invalid @enderror inputAdd"
                            wire:model.defer="category" name="category">
                            <option value="" selected>{{ __('ui.selectCategory') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->namejp }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    @endif
                </div>
                <div class="mb-3">
                    {{-- <label class="form-label textWhiteSmoke">{{__('ui.articleTitle')}}</label> --}}
                    <input type="text" class="form-control @error('title') is-invalid @enderror inputAdd"
                        wire:model.lazy="title" placeholder="{{ __('ui.articleTitle') }}">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    <div>
                        {{-- <label class="form-label textWhiteSmoke">{{__('ui.articleBody')}}</label> --}}
                    </div>
                    <textarea class="form-control @error('description') is-invalid @enderror inputAdd"
                        wire:model.debounce.1000ms="description" cols="30" rows="10" placeholder="{{ __('ui.articleBody') }}"></textarea>
                    <span class="textWhiteSmoke">{{ __('ui.char') }} {{ $descriptionLength }}/300</span>
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    {{-- <label class="form-label textWhiteSmoke">{{__('ui.city')}}</label> --}}
                    <input type="text" class="form-control @error('city') is-invalid @enderror inputAdd"
                        wire:model.lazy="city" placeholder="{{ __('ui.city') }}">
                    @error('city')
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    {{-- <label class="form-label textWhiteSmoke">{{__('ui.price')}}</label> --}}
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror inputAdd"
                        wire:model.lazy="price" placeholder="{{ __('ui.price') }}">
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btnAddArticle mt-3">{{ __('ui.insert') }}</button>
            </form>
        </div>

    </div>

    <div class="col-12 col-md-4 min-vh-100 pt-5 d-flex flex-column align-items-center bgArticle">

        {{-- input immagini --}}
        <div class="mb-3 mt-5 pt-5">
            <label class="form-label textWhiteSmoke">{{ __('ui.insertImages') }}</label>
            <input name="images" wire:model.debounce.500ms="temporary_images" type="file" multiple
                class="form-control shadow @error('temporary_images.*') is-invalid @enderror @error('temporary_images') is-invalid @enderror inputAdd">
            @error('temporary_images.*')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            @error('temporary_images')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        @if (!empty($images))
            {{-- <div class="row">
                    <div class="col-12"> --}}
            {{-- <p>{{__('ui.imgPreview')}}</p> --}}
            <div class="row borderCustomPreview">
                @foreach ($images as $key => $image)
                    <div class="col-12 col-md-4  mb-3">
                        <div class="img-preview mx-auto shadow rounded "
                            style="background-image: url({{ $image->temporaryUrl() }});">

                            <button type="button" class="btn position-absolute"
                                wire:click="removeImage({{ $key }})">
                                <i class="fa-solid fa-circle-xmark fa-2x btnRemovePreview"></i>
                            </button>
                        </div>

                    </div>
                @endforeach
            </div>
            {{-- </div> --}}
            {{-- </div> --}}
        @endif

    </div>


    <script>
        // PROVA FUNZIONE MULTIPLE MAX 5 FOTO
        $(function() {
            $("input[name='images']").click(function() {
                var $fileUpload = $("input[name='images']");
                if (parseInt($fileUpload.get(0).files.length) > 5) {
                    alert("You can only upload a maximum of 2 files");
                }
            });
        });​
    </script>

</div>

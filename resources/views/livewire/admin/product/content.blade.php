<div class="statbox widget box box-shadow">
    <div class="widget-header">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h6>
                    محتوای محصول
                    {{ $productName }}
                </h6>
            </div>
        </div>
    </div>
    <div class="widget-content widget-content-area">

        <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
            <div class="row mb-4">
                <div class="col-sm-12">
                    <label for="short_description">معرفی محصول</label>
                    <textarea class="form-control" rows="6" id="short_description" name="short_description"></textarea>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-12" wire:ignore>
                    <label for="long_description">بررسی تخصصی</label>
                    <textarea class="form-control" id="long_description" name="long_description" wire:model="longDescription"></textarea>
                </div>
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">ذخیره</button>
            </div>
        </form>

        @push('script')
            <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

            <script>
                document.addEventListener('livewire:init', () => {

                    const editor = CKEDITOR.replace('long_description', {
                        filebrowserUploadUrl: "{{ route('admin.ck-upload', [$productId, '_token' => csrf_token()]) }}",
                        filebrowserUploadMethod: 'form',
                        contentsLangDirection: 'rtl',
                        height: 200,

                    })

                    editor.on('change', function(event) {
                        console.log(event.editor.getData());
                        @this.set('longDescription', event.editor.getData())
                    })

                })
            </script>
        @endpush
    </div>

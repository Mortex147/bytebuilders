<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Post') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.post.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Post')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
                        <!-- Post_title Input -->
            <div class='form-group'>
                <label for='input-post_title' class='col-sm-2 control-label '> {{ __('Post_title') }}</label>
                <input type='text' id='input-post_title' wire:model.lazy='post_title' class="form-control  @error('post_title') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('post_title') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Post_category Input -->
            <div class='form-group'>
                <label for='input-post_category' class='col-sm-2 control-label '> {{ __('Post_category') }}</label>
                <input type='text' id='input-post_category' wire:model.lazy='post_category' class="form-control  @error('post_category') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('post_category') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Post_creator_id Input -->
            <div class='form-group'>
                <label for='input-post_creator_id' class='col-sm-2 control-label '> {{ __('Post_creator_id') }}</label>
                <input type='number' id='input-post_creator_id' wire:model.lazy='post_creator_id' class="form-control  @error('post_creator_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('post_creator_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Post_description Input -->
            <div class='form-group'>
                <label for='input-post_description' class='col-sm-2 control-label '> {{ __('Post_description') }}</label>
                <textarea id="input-post_description" wire:model.lazy='post_description' class="form-control  @error('post_description') is-invalid @enderror" placeholder='' autocomplete='on'></textarea>
                @error('post_description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Post_image Input -->
            <div class='form-group'>
                <label for='input-post_image' class='col-sm-2 control-label '> {{ __('Post_image') }}</label>
                <input type='file' id='input-post_image' wire:model='post_image' class="form-control-file  @error('post_image') is-invalid @enderror">
                @if($post_image and !$errors->has('post_image') and $post_image instanceof Illuminate\Http\UploadedFile and $post_image->isPreviewable())
                    <a href="{{ $post_image->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $post_image->temporaryUrl() }}" alt=""></a>
                @endif
                @error('post_image') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Public Input -->
            <div class='form-group'>
                <label for='input-public' class='col-sm-2 control-label '> {{ __('Public') }}</label>
                <input type='number' id='input-public' wire:model.lazy='public' class="form-control  @error('public') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('public') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Suspand Input -->
            <div class='form-group'>
                <label for='input-suspand' class='col-sm-2 control-label '> {{ __('Suspand') }}</label>
                <input type='number' id='input-suspand' wire:model.lazy='suspand' class="form-control  @error('suspand') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('suspand') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.post.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>

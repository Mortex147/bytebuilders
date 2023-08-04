<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Category') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.category.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Category')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Category_name Input -->
            <div class='form-group'>
                <label for='input-category_name' class='col-sm-2 control-label '> {{ __('Category_name') }}</label>
                <input type='text' id='input-category_name' wire:model.lazy='category_name' class="form-control  @error('category_name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('category_name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Category_description Input -->
            <div class='form-group'>
                <label for='input-category_description' class='col-sm-2 control-label '> {{ __('Category_description') }}</label>
                <input type='text' id='input-category_description' wire:model.lazy='category_description' class="form-control  @error('category_description') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('category_description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.category.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
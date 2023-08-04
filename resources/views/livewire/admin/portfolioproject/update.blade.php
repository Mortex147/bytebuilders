<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('PortfolioProject') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.portfolioproject.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('PortfolioProject')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Portfolio_project_title Input -->
            <div class='form-group'>
                <label for='input-portfolio_project_title' class='col-sm-2 control-label '> {{ __('Portfolio_project_title') }}</label>
                <input type='text' id='input-portfolio_project_title' wire:model.lazy='portfolio_project_title' class="form-control  @error('portfolio_project_title') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('portfolio_project_title') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Portfolio_project_description Input -->
            <div class='form-group'>
                <label for='input-portfolio_project_description' class='col-sm-2 control-label '> {{ __('Portfolio_project_description') }}</label>
                <input type='text' id='input-portfolio_project_description' wire:model.lazy='portfolio_project_description' class="form-control  @error('portfolio_project_description') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('portfolio_project_description') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Portfolio_project_github Input -->
            <div class='form-group'>
                <label for='input-portfolio_project_github' class='col-sm-2 control-label '> {{ __('Portfolio_project_github') }}</label>
                <input type='text' id='input-portfolio_project_github' wire:model.lazy='portfolio_project_github' class="form-control  @error('portfolio_project_github') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('portfolio_project_github') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Portfolio_project_img_upload Input -->
            <div class='form-group'>
                <label for='input-portfolio_project_img_upload' class='col-sm-2 control-label '> {{ __('Portfolio_project_img_upload') }}</label>
                <input type='file' id='input-portfolio_project_img_upload' wire:model='portfolio_project_img_upload' class="form-control-file  @error('portfolio_project_img_upload') is-invalid @enderror">
                @if($portfolio_project_img_upload and !$errors->has('portfolio_project_img_upload') and $portfolio_project_img_upload instanceof Illuminate\Http\UploadedFile and $portfolio_project_img_upload->isPreviewable())
                    <a href="{{ $portfolio_project_img_upload->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $portfolio_project_img_upload->temporaryUrl() }}" alt=""></a>
                @endif
                @error('portfolio_project_img_upload') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_id Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_id' class='col-sm-2 control-label '> {{ __('Bytebuilder_id') }}</label>
                <input type='number' id='input-bytebuilder_id' wire:model.lazy='bytebuilder_id' class="form-control  @error('bytebuilder_id') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_id') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.portfolioproject.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Bytebuilder') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.bytebuilder.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Bytebuilder')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Bytebuilder_name Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_name' class='col-sm-2 control-label '> {{ __('Bytebuilder_name') }}</label>
                <input type='text' id='input-bytebuilder_name' wire:model.lazy='bytebuilder_name' class="form-control  @error('bytebuilder_name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_prename Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_prename' class='col-sm-2 control-label '> {{ __('Bytebuilder_prename') }}</label>
                <input type='text' id='input-bytebuilder_prename' wire:model.lazy='bytebuilder_prename' class="form-control  @error('bytebuilder_prename') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_prename') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_email Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_email' class='col-sm-2 control-label '> {{ __('Bytebuilder_email') }}</label>
                <input type='email' id='input-bytebuilder_email' wire:model.lazy='bytebuilder_email' class="form-control  @error('bytebuilder_email') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_email') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_password Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_password' class='col-sm-2 control-label '> {{ __('Bytebuilder_password') }}</label>
                <input type='text' id='input-bytebuilder_password' wire:model.lazy='bytebuilder_password' class="form-control  @error('bytebuilder_password') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_password') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_category Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_category' class='col-sm-2 control-label '> {{ __('Bytebuilder_category') }}</label>
                <input type='text' id='input-bytebuilder_category' wire:model.lazy='bytebuilder_category' class="form-control  @error('bytebuilder_category') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_category') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_city Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_city' class='col-sm-2 control-label '> {{ __('Bytebuilder_city') }}</label>
                <input type='text' id='input-bytebuilder_city' wire:model.lazy='bytebuilder_city' class="form-control  @error('bytebuilder_city') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_city') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_country Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_country' class='col-sm-2 control-label '> {{ __('Bytebuilder_country') }}</label>
                <input type='text' id='input-bytebuilder_country' wire:model.lazy='bytebuilder_country' class="form-control  @error('bytebuilder_country') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_country') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_birthdate Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_birthdate' class='col-sm-2 control-label '> {{ __('Bytebuilder_birthdate') }}</label>
                <input type='date' id='input-bytebuilder_birthdate' wire:model.lazy='bytebuilder_birthdate' class="form-control  @error('bytebuilder_birthdate') is-invalid @enderror" autocomplete='on'>
                @error('bytebuilder_birthdate') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Profile_image Input -->
            <div class='form-group'>
                <label for='input-profile_image' class='col-sm-2 control-label '> {{ __('Profile_image') }}</label>
                <input type='file' id='input-profile_image' wire:model='profile_image' class="form-control-file  @error('profile_image') is-invalid @enderror">
                @if($profile_image and !$errors->has('profile_image') and $profile_image instanceof Illuminate\Http\UploadedFile and $profile_image->isPreviewable())
                    <a href="{{ $profile_image->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $profile_image->temporaryUrl() }}" alt=""></a>
                @endif
                @error('profile_image') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Background_image Input -->
            <div class='form-group'>
                <label for='input-background_image' class='col-sm-2 control-label '> {{ __('Background_image') }}</label>
                <input type='file' id='input-background_image' wire:model='background_image' class="form-control-file  @error('background_image') is-invalid @enderror">
                @if($background_image and !$errors->has('background_image') and $background_image instanceof Illuminate\Http\UploadedFile and $background_image->isPreviewable())
                    <a href="{{ $background_image->temporaryUrl() }}" target="_blank"><img width="200" height="200" class="mt-3 img-fluid shadow" src="{{ $background_image->temporaryUrl() }}" alt=""></a>
                @endif
                @error('background_image') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_about Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_about' class='col-sm-2 control-label '> {{ __('Bytebuilder_about') }}</label>
                <textarea id="input-bytebuilder_about" wire:model.lazy='bytebuilder_about' class="form-control  @error('bytebuilder_about') is-invalid @enderror" placeholder='' autocomplete='on'></textarea>
                @error('bytebuilder_about') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Address Input -->
            <div class='form-group'>
                <label for='input-address' class='col-sm-2 control-label '> {{ __('Address') }}</label>
                <input type='text' id='input-address' wire:model.lazy='address' class="form-control  @error('address') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('address') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_phone Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_phone' class='col-sm-2 control-label '> {{ __('Bytebuilder_phone') }}</label>
                <input type='text' id='input-bytebuilder_phone' wire:model.lazy='bytebuilder_phone' class="form-control  @error('bytebuilder_phone') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_phone') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_linkdin Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_linkdin' class='col-sm-2 control-label '> {{ __('Bytebuilder_linkdin') }}</label>
                <input type='text' id='input-bytebuilder_linkdin' wire:model.lazy='bytebuilder_linkdin' class="form-control  @error('bytebuilder_linkdin') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_linkdin') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_facebook Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_facebook' class='col-sm-2 control-label '> {{ __('Bytebuilder_facebook') }}</label>
                <input type='text' id='input-bytebuilder_facebook' wire:model.lazy='bytebuilder_facebook' class="form-control  @error('bytebuilder_facebook') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_facebook') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_instagrame Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_instagrame' class='col-sm-2 control-label '> {{ __('Bytebuilder_instagrame') }}</label>
                <input type='text' id='input-bytebuilder_instagrame' wire:model.lazy='bytebuilder_instagrame' class="form-control  @error('bytebuilder_instagrame') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_instagrame') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_twitter Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_twitter' class='col-sm-2 control-label '> {{ __('Bytebuilder_twitter') }}</label>
                <input type='text' id='input-bytebuilder_twitter' wire:model.lazy='bytebuilder_twitter' class="form-control  @error('bytebuilder_twitter') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_twitter') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_thread Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_thread' class='col-sm-2 control-label '> {{ __('Bytebuilder_thread') }}</label>
                <input type='text' id='input-bytebuilder_thread' wire:model.lazy='bytebuilder_thread' class="form-control  @error('bytebuilder_thread') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_thread') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_github Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_github' class='col-sm-2 control-label '> {{ __('Bytebuilder_github') }}</label>
                <input type='text' id='input-bytebuilder_github' wire:model.lazy='bytebuilder_github' class="form-control  @error('bytebuilder_github') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_github') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Bytebuilder_portfolio_exist Input -->
            <div class='form-group'>
                <label for='input-bytebuilder_portfolio_exist' class='col-sm-2 control-label '> {{ __('Bytebuilder_portfolio_exist') }}</label>
                <input type='number' id='input-bytebuilder_portfolio_exist' wire:model.lazy='bytebuilder_portfolio_exist' class="form-control  @error('bytebuilder_portfolio_exist') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('bytebuilder_portfolio_exist') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Enable_edit Input -->
            <div class='form-group'>
                <label for='input-enable_edit' class='col-sm-2 control-label '> {{ __('Enable_edit') }}</label>
                <input type='number' id='input-enable_edit' wire:model.lazy='enable_edit' class="form-control  @error('enable_edit') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('enable_edit') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Google_token Input -->
            <div class='form-group'>
                <label for='input-google_token' class='col-sm-2 control-label '> {{ __('Google_token') }}</label>
                <input type='text' id='input-google_token' wire:model.lazy='google_token' class="form-control  @error('google_token') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('google_token') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Github_token Input -->
            <div class='form-group'>
                <label for='input-github_token' class='col-sm-2 control-label '> {{ __('Github_token') }}</label>
                <input type='text' id='input-github_token' wire:model.lazy='github_token' class="form-control  @error('github_token') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('github_token') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Email_verified_at Input -->
            <div class='form-group'>
                <label for='input-email_verified_at' class='col-sm-2 control-label '> {{ __('Email_verified_at') }}</label>
                <input type='datetime-local' id='input-email_verified_at' wire:model.lazy='email_verified_at' class="form-control  @error('email_verified_at') is-invalid @enderror" autocomplete='on'>
                @error('email_verified_at') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.bytebuilder.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>

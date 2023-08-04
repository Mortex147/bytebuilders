<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Bytebuilder')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Bytebuilder')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Bytebuilder')->create && hasPermission(getRouteName().'.bytebuilder.create', 0, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.bytebuilder.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Bytebuilder') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Bytebuilder')->searchable())
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" @if(config('easy_panel.lazy_mode')) wire:model.lazy="search" @else wire:model="search" @endif placeholder="{{ __('Search') }}" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-default">
                                        <a wire:target="search" wire:loading.remove><i class="fa fa-search"></i></a>
                                        <a wire:loading wire:target="search"><i class="fas fa-spinner fa-spin" ></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_name')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_name') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_name') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_name') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_prename')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_prename') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_prename') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_prename') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_email')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_email') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_email') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_email') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_password')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_password') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_password') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_password') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_category')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_category') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_category') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_category') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_city')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_city') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_city') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_city') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_country')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_country') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_country') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_country') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_birthdate')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_birthdate') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_birthdate') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_birthdate') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('profile_image')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'profile_image') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'profile_image') fa-sort-amount-up ml-2 @endif'></i> {{ __('Profile_image') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('background_image')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'background_image') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'background_image') fa-sort-amount-up ml-2 @endif'></i> {{ __('Background_image') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_about')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_about') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_about') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_about') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('address')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'address') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'address') fa-sort-amount-up ml-2 @endif'></i> {{ __('Address') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_phone')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_phone') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_phone') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_phone') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_linkdin')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_linkdin') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_linkdin') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_linkdin') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_facebook')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_facebook') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_facebook') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_facebook') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_instagrame')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_instagrame') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_instagrame') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_instagrame') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_twitter')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_twitter') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_twitter') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_twitter') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_thread')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_thread') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_thread') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_thread') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_github')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_github') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_github') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_github') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('bytebuilder_portfolio_exist')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'bytebuilder_portfolio_exist') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'bytebuilder_portfolio_exist') fa-sort-amount-up ml-2 @endif'></i> {{ __('Bytebuilder_portfolio_exist') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('enable_edit')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'enable_edit') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'enable_edit') fa-sort-amount-up ml-2 @endif'></i> {{ __('Enable_edit') }} </th>
                            
                            @if(getCrudConfig('Bytebuilder')->delete or getCrudConfig('Bytebuilder')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bytebuilders as $bytebuilder)
                            @livewire('admin.bytebuilder.single', [$bytebuilder], key($bytebuilder->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $bytebuilders->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>

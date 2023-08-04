<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Team')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Team')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Team')->create && hasPermission(getRouteName().'.team.create', 1, 1))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.team.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Team') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Team')->searchable())
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('team_name')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'team_name') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'team_name') fa-sort-amount-up ml-2 @endif'></i> {{ __('Team_name') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('team_category')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'team_category') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'team_category') fa-sort-amount-up ml-2 @endif'></i> {{ __('Team_category') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('team_creator')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'team_creator') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'team_creator') fa-sort-amount-up ml-2 @endif'></i> {{ __('Team_creator') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('team_description')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'team_description') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'team_description') fa-sort-amount-up ml-2 @endif'></i> {{ __('Team_description') }} </th>
                            
                            @if(getCrudConfig('Team')->delete or getCrudConfig('Team')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                            @livewire('admin.team.single', [$team], key($team->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $teams->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>

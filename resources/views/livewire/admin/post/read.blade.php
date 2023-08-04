<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="card-title">{{ __('ListTitle', ['name' => __(\Illuminate\Support\Str::plural('Post')) ]) }}</h3>

                <div class="px-2 mt-4">

                    <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                        <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __(\Illuminate\Support\Str::plural('Post')) }}</li>
                    </ul>

                    <div class="row justify-content-between mt-4 mb-4">
                        @if(getCrudConfig('Post')->create && hasPermission(getRouteName().'.post.create', 0, 0))
                        <div class="col-md-4 right-0">
                            <a href="@route(getRouteName().'.post.create')" class="btn btn-success">{{ __('CreateTitle', ['name' => __('Post') ]) }}</a>
                        </div>
                        @endif
                        @if(getCrudConfig('Post')->searchable())
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
                            <th scope="col" style='cursor: pointer' wire:click="sort('post_title')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'post_title') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'post_title') fa-sort-amount-up ml-2 @endif'></i> {{ __('Post_title') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('post_category')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'post_category') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'post_category') fa-sort-amount-up ml-2 @endif'></i> {{ __('Post_category') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('post_creator_id')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'post_creator_id') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'post_creator_id') fa-sort-amount-up ml-2 @endif'></i> {{ __('Post_creator_id') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('post_description')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'post_description') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'post_description') fa-sort-amount-up ml-2 @endif'></i> {{ __('Post_description') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('post_image')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'post_image') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'post_image') fa-sort-amount-up ml-2 @endif'></i> {{ __('Post_image') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('public')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'public') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'public') fa-sort-amount-up ml-2 @endif'></i> {{ __('Public') }} </th>
                            <th scope="col" style='cursor: pointer' wire:click="sort('suspand')"> <i class='fa @if($sortType == 'desc' and $sortColumn == 'suspand') fa-sort-amount-down ml-2 @elseif($sortType == 'asc' and $sortColumn == 'suspand') fa-sort-amount-up ml-2 @endif'></i> {{ __('Suspand') }} </th>
                            
                            @if(getCrudConfig('Post')->delete or getCrudConfig('Post')->update)
                                <th scope="col">{{ __('Action') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            @livewire('admin.post.single', [$post], key($post->id))
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $posts->appends(request()->query())->links() }}
            </div>

            <div wire:loading wire:target="nextPage,gotoPage,previousPage" class="loader-page"></div>

        </div>
    </div>
</div>

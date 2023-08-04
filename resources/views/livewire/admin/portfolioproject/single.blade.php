<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $portfolioproject->portfolio_project_title }}</td>
    <td class="">{{ $portfolioproject->portfolio_project_description }}</td>
    <td class="">{{ $portfolioproject->portfolio_project_github }}</td>
    <td class="">{{ $portfolioproject->portfolio_project_img_upload }}</td>
    
    @if(getCrudConfig('PortfolioProject')->delete or getCrudConfig('PortfolioProject')->update)
        <td>

            @if(getCrudConfig('PortfolioProject')->update && hasPermission(getRouteName().'.portfolioproject.update', 0, 0, $portfolioproject))
                <a href="@route(getRouteName().'.portfolioproject.update', $portfolioproject->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('PortfolioProject')->delete && hasPermission(getRouteName().'.portfolioproject.delete', 0, 0, $portfolioproject))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('PortfolioProject') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('PortfolioProject') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>

<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $portfolioexperience->portfolio_experience_title }}</td>
    <td class="">{{ $portfolioexperience->portfolio_experience_description }}</td>
    <td class="">{{ $portfolioexperience->portfolio_project_github }}</td>
    <td class="">{{ $portfolioexperience->portfolio_experience_img_upload }}</td>
    
    @if(getCrudConfig('PortfolioExperience')->delete or getCrudConfig('PortfolioExperience')->update)
        <td>

            @if(getCrudConfig('PortfolioExperience')->update && hasPermission(getRouteName().'.portfolioexperience.update', 0, 0, $portfolioexperience))
                <a href="@route(getRouteName().'.portfolioexperience.update', $portfolioexperience->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('PortfolioExperience')->delete && hasPermission(getRouteName().'.portfolioexperience.delete', 0, 0, $portfolioexperience))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('PortfolioExperience') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('PortfolioExperience') ]) }}</p>
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

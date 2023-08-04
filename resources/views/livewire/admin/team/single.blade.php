<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $team->team_name }}</td>
    <td class="">{{ $team->team_category }}</td>
    <td class="">{{ $team->team_creator }}</td>
    <td class="">{{ $team->team_description }}</td>
    
    @if(getCrudConfig('Team')->delete or getCrudConfig('Team')->update)
        <td>

            @if(getCrudConfig('Team')->update && hasPermission(getRouteName().'.team.update', 1, 1, $team))
                <a href="@route(getRouteName().'.team.update', $team->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Team')->delete && hasPermission(getRouteName().'.team.delete', 1, 1, $team))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Team') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Team') ]) }}</p>
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

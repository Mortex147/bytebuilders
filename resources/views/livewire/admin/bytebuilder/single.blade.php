<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $bytebuilder->bytebuilder_name }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_prename }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_email }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_password }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_category }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_city }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_country }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_birthdate }}</td>
    <td class="">{{ $bytebuilder->profile_image }}</td>
    <td class="">{{ $bytebuilder->background_image }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_about }}</td>
    <td class="">{{ $bytebuilder->address }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_phone }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_linkdin }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_facebook }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_instagrame }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_twitter }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_thread }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_github }}</td>
    <td class="">{{ $bytebuilder->bytebuilder_portfolio_exist }}</td>
    <td class="">{{ $bytebuilder->enable_edit }}</td>
    
    @if(getCrudConfig('Bytebuilder')->delete or getCrudConfig('Bytebuilder')->update)
        <td>

            @if(getCrudConfig('Bytebuilder')->update && hasPermission(getRouteName().'.bytebuilder.update', 0, 0, $bytebuilder))
                <a href="@route(getRouteName().'.bytebuilder.update', $bytebuilder->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Bytebuilder')->delete && hasPermission(getRouteName().'.bytebuilder.delete', 0, 0, $bytebuilder))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Bytebuilder') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Bytebuilder') ]) }}</p>
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

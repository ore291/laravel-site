<div>
    <script>
        console.log(@json($users))
    </script>
    <div class="row mt-4">
        <div class="col">
            <input type="text" class="form-control my-2" placeholder=" Search" wire:model="searchTerm" />

            <table class="table table-hover table-responsive-sm">
                <thead>
                    <tr>
                        <th>{{ __('labels.backend.users.fields.name') }}</th>
                        <th>{{ __('labels.backend.users.fields.email') }}</th>
                        <th>{{ __('labels.backend.users.fields.status') }}</th>
                        <th>{{ __('Subscription') }}</th>
                       

                        <th class="text-end">{{ __('labels.backend.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            <strong>
                                <a href="{{route('backend.users.show', $user->id)}}">
                                    {{ $user->name }}
                                </a>
                            </strong>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>
                            {!! $user->status_label !!}       
                        </td>
                        <td>
                            <ul class="list-unstyled">
                                @foreach ($user->subscriptions as $sub)
                                <li>
                                    <i class="fab fa-user"></i> {{ label_case($sub->plan_name) }}
                                </li>
                                @endforeach
                            </ul>
                        </td>
                        
                       
                       
                        <td class="text-end">
                            
                            @can('edit_users')
                           
                            <a href="{{route('backend.upgrade-user.edit', $user)}}" class="btn btn-warning btn-sm mt-1" data-toggle="tooltip" title="Upgrade Plan"><i class="fas fa-level-up"></i></a>
                           
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-7">
            <div class="float-left">
                {!! $users->total() !!} {{ __('labels.backend.total') }}
            </div>
        </div>
        <div class="col-5">
            <div class="float-end">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
</div>
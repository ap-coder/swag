<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Verified</th>
        <th>Verified At</th>
        <th>Verification Token</th>
        <th>User Token</th>
        <th>Access Token</th>
        <th>Refresh Token</th>
        <th>Api Token</th>
        <th>Secret</th>
        <th>Approved</th>
        <th>About</th>
        <th>Token</th>
        <th>Activation Key</th>
        <th>Team Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->email_verified_at }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->remember_token }}</td>
            <td>{{ $user->verified }}</td>
            <td>{{ $user->verified_at }}</td>
            <td>{{ $user->verification_token }}</td>
            <td>{{ $user->user_token }}</td>
            <td>{{ $user->access_token }}</td>
            <td>{{ $user->refresh_token }}</td>
            <td>{{ $user->api_token }}</td>
            <td>{{ $user->secret }}</td>
            <td>{{ $user->approved }}</td>
            <td>{{ $user->about }}</td>
            <td>{{ $user->token }}</td>
            <td>{{ $user->activation_key }}</td>
            <td>{{ $user->team_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

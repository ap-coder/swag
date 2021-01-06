<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Approved</th>
        <th>Company</th>
        <th>Title</th>
        <th>Phone</th>
        <th>City</th>
        <th>State Region</th>
        <th>Country</th>
        <th>Current Customer Partner</th>
        <th>Cortexdecoder</th>
        <th>Epic Id Number</th>
        <th>Already Talked To Rep</th>
        <th>Are You A Student</th>
        <th>Are You A Vendor</th>
        <th>Accept Terms</th>
        <th>Referral</th>
        <th>Lead Source</th>
        <th>Product Interest</th>
        <th>License Key</th>
        <th>W 2 Lcc</th>
        <th>Agent 1</th>
        <th>Agent 2</th>
        <th>Salesforce</th>
        <th>Salesrep Email</th>
        <th>Description</th>
        <th>Last Login</th>
        <th>Contract Agreed</th>
        <th>Contract Agreed Date</th>
        <th>Contract Form Sent</th>
        <th>Consulted</th>
        <th>Display Name</th>
        <th>Team Id</th>
        <th>Sales Rep Id</th>
        <th>Industy Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>{{ $account->first_name }}</td>
            <td>{{ $account->last_name }}</td>
            <td>{{ $account->approved }}</td>
            <td>{{ $account->company }}</td>
            <td>{{ $account->title }}</td>
            <td>{{ $account->phone }}</td>
            <td>{{ $account->city }}</td>
            <td>{{ $account->state_region }}</td>
            <td>{{ $account->country }}</td>
            <td>{{ $account->current_customer_partner }}</td>
            <td>{{ $account->cortexdecoder }}</td>
            <td>{{ $account->epic_id_number }}</td>
            <td>{{ $account->already_talked_to_rep }}</td>
            <td>{{ $account->are_you_a_student }}</td>
            <td>{{ $account->are_you_a_vendor }}</td>
            <td>{{ $account->accept_terms }}</td>
            <td>{{ $account->referral }}</td>
            <td>{{ $account->lead_source }}</td>
            <td>{{ $account->product_interest }}</td>
            <td>{{ $account->license_key }}</td>
            <td>{{ $account->w_2_lcc }}</td>
            <td>{{ $account->agent_1 }}</td>
            <td>{{ $account->agent_2 }}</td>
            <td>{{ $account->salesforce }}</td>
            <td>{{ $account->salesrep_email }}</td>
            <td>{{ $account->description }}</td>
            <td>{{ $account->last_login }}</td>
            <td>{{ $account->contract_agreed }}</td>
            <td>{{ $account->contract_agreed_date }}</td>
            <td>{{ $account->contract_form_sent }}</td>
            <td>{{ $account->consulted }}</td>
            <td>{{ $account->display_name }}</td>
            <td>{{ $account->team_id }}</td>
            <td>{{ $account->sales_rep_id }}</td>
            <td>{{ $account->industy_id }}</td>
            <td>{{ $account->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('accounts.show', [$account->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('accounts.edit', [$account->id]) }}" class='btn btn-default btn-xs'>
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

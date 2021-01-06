<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Approved Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('approved', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('approved', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('approved', 'Approved', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- State Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state_region', 'State Region:') !!}
    {!! Form::text('state_region', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Current Customer Partner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_customer_partner', 'Current Customer Partner:') !!}
    {!! Form::text('current_customer_partner', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cortexdecoder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cortexdecoder', 'Cortexdecoder:') !!}
    {!! Form::text('cortexdecoder', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Epic Id Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epic_id_number', 'Epic Id Number:') !!}
    {!! Form::text('epic_id_number', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Already Talked To Rep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('already_talked_to_rep', 'Already Talked To Rep:') !!}
    {!! Form::text('already_talked_to_rep', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Are You A Student Field -->
<div class="form-group col-sm-6">
    {!! Form::label('are_you_a_student', 'Are You A Student:') !!}
    {!! Form::text('are_you_a_student', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Are You A Vendor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('are_you_a_vendor', 'Are You A Vendor:') !!}
    {!! Form::text('are_you_a_vendor', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Accept Terms Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('accept_terms', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('accept_terms', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('accept_terms', 'Accept Terms', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Referral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referral', 'Referral:') !!}
    {!! Form::text('referral', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Lead Source Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lead_source', 'Lead Source:') !!}
    {!! Form::text('lead_source', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Interest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_interest', 'Product Interest:') !!}
    {!! Form::text('product_interest', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- License Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('license_key', 'License Key:') !!}
    {!! Form::text('license_key', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- W 2 Lcc Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('w_2_lcc', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('w_2_lcc', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('w_2_lcc', 'W 2 Lcc', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Agent 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_1', 'Agent 1:') !!}
    {!! Form::text('agent_1', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Agent 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_2', 'Agent 2:') !!}
    {!! Form::text('agent_2', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Salesforce Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salesforce', 'Salesforce:') !!}
    {!! Form::text('salesforce', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Salesrep Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salesrep_email', 'Salesrep Email:') !!}
    {!! Form::text('salesrep_email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Last Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_login', 'Last Login:') !!}
    {!! Form::text('last_login', null, ['class' => 'form-control','id'=>'last_login']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#last_login').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Contract Agreed Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('contract_agreed', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('contract_agreed', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('contract_agreed', 'Contract Agreed', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Contract Agreed Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contract_agreed_date', 'Contract Agreed Date:') !!}
    {!! Form::text('contract_agreed_date', null, ['class' => 'form-control','id'=>'contract_agreed_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#contract_agreed_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Contract Form Sent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contract_form_sent', 'Contract Form Sent:') !!}
    {!! Form::text('contract_form_sent', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Consulted Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('consulted', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('consulted', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('consulted', 'Consulted', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Display Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('display_name', 'Display Name:') !!}
    {!! Form::text('display_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Team Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('team_id', 'Team Id:') !!}
    {!! Form::number('team_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sales Rep Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sales_rep_id', 'Sales Rep Id:') !!}
    {!! Form::number('sales_rep_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Industy Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('industy_id', 'Industy Id:') !!}
    {!! Form::number('industy_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>
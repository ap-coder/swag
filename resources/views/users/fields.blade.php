<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Verified Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('verified', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('verified', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('verified', 'Verified', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('verified_at', 'Verified At:') !!}
    {!! Form::text('verified_at', null, ['class' => 'form-control','id'=>'verified_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Verification Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('verification_token', 'Verification Token:') !!}
    {!! Form::text('verification_token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- User Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_token', 'User Token:') !!}
    {!! Form::text('user_token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Access Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('access_token', 'Access Token:') !!}
    {!! Form::text('access_token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Refresh Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('refresh_token', 'Refresh Token:') !!}
    {!! Form::text('refresh_token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Api Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('api_token', 'Api Token:') !!}
    {!! Form::text('api_token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Secret Field -->
<div class="form-group col-sm-6">
    {!! Form::label('secret', 'Secret:') !!}
    {!! Form::text('secret', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Approved Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('approved', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('approved', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('approved', 'Approved', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- About Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about', 'About:') !!}
    {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
</div>

<!-- Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('token', 'Token:') !!}
    {!! Form::text('token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Activation Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activation_key', 'Activation Key:') !!}
    {!! Form::text('activation_key', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Team Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('team_id', 'Team Id:') !!}
    {!! Form::number('team_id', null, ['class' => 'form-control']) !!}
</div>
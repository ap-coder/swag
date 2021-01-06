<!-- Job Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_title', 'Job Title:') !!}
    {!! Form::text('job_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Open Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('open_date', 'Open Date:') !!}
    {!! Form::text('open_date', null, ['class' => 'form-control','id'=>'open_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#open_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Close Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('close_date', 'Close Date:') !!}
    {!! Form::text('close_date', null, ['class' => 'form-control','id'=>'close_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#close_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Job Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('job_description', 'Job Description:') !!}
    {!! Form::textarea('job_description', null, ['class' => 'form-control']) !!}
</div>

<!-- About Code Section Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_code_section', 'About Code Section:') !!}
    {!! Form::textarea('about_code_section', null, ['class' => 'form-control']) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('published', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('published', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('published', 'Published', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Apply Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apply_link', 'Apply Link:') !!}
    {!! Form::text('apply_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- View Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('view_count', 'View Count:') !!}
    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short', 'Short:') !!}
    {!! Form::textarea('short', null, ['class' => 'form-control']) !!}
</div>

<!-- Demo Request Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('demo_request_link', 'Demo Request Link:') !!}
    {!! Form::text('demo_request_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Demo Form Field -->
<div class="form-group col-sm-6">
    {!! Form::label('demo_form', 'Demo Form:') !!}
    {!! Form::text('demo_form', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Chicklet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chicklet', 'Chicklet:') !!}
    {!! Form::text('chicklet', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('published', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('published', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('published', 'Published', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Meta Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_title', 'Facebook Title:') !!}
    {!! Form::text('facebook_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Facebook Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('facebook_desc', 'Facebook Desc:') !!}
    {!! Form::textarea('facebook_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Post Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter_post_title', 'Twitter Post Title:') !!}
    {!! Form::text('twitter_post_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Twitter Post Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('twitter_post_description', 'Twitter Post Description:') !!}
    {!! Form::textarea('twitter_post_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Section Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes_section', 'Notes Section:') !!}
    {!! Form::textarea('notes_section', null, ['class' => 'form-control']) !!}
</div>

<!-- Mpn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mpn', 'Mpn:') !!}
    {!! Form::text('mpn', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sku', 'Sku:') !!}
    {!! Form::text('sku', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Demo Button Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('demo_button_text', 'Demo Button Text:') !!}
    {!! Form::text('demo_button_text', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cta Button Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cta_button_text', 'Cta Button Text:') !!}
    {!! Form::text('cta_button_text', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cta Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cta_url', 'Cta Url:') !!}
    {!! Form::text('cta_url', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('published', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('published', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('published', 'Published', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Page Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('page_text', 'Page Text:') !!}
    {!! Form::textarea('page_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Excerpt Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('excerpt', 'Excerpt:') !!}
    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Meta Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::text('meta_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Facebook Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_title', 'Facebook Title:') !!}
    {!! Form::text('facebook_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Facebook Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_desc', 'Facebook Desc:') !!}
    {!! Form::text('facebook_desc', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Twitter Post Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter_post_title', 'Twitter Post Title:') !!}
    {!! Form::text('twitter_post_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Twitter Post Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter_post_description', 'Twitter Post Description:') !!}
    {!! Form::text('twitter_post_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contributor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contributor', 'Contributor:') !!}
    {!! Form::text('contributor', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contributor Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contributor_link', 'Contributor Link:') !!}
    {!! Form::text('contributor_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contributor 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contributor_2', 'Contributor 2:') !!}
    {!! Form::text('contributor_2', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contributor 2 Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contributor_2_link', 'Contributor 2 Link:') !!}
    {!! Form::text('contributor_2_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Author Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_id', 'Author Id:') !!}
    {!! Form::number('author_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>
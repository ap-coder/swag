<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Short</th>
        <th>Demo Request Link</th>
        <th>Demo Form</th>
        <th>Slug</th>
        <th>Type</th>
        <th>Chicklet</th>
        <th>Published</th>
        <th>Meta Title</th>
        <th>Meta Description</th>
        <th>Facebook Title</th>
        <th>Facebook Desc</th>
        <th>Twitter Post Title</th>
        <th>Twitter Post Description</th>
        <th>Notes Section</th>
        <th>Mpn</th>
        <th>Sku</th>
        <th>Demo Button Text</th>
        <th>Cta Button Text</th>
        <th>Cta Url</th>
        <th>Status Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->short }}</td>
            <td>{{ $product->demo_request_link }}</td>
            <td>{{ $product->demo_form }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->chicklet }}</td>
            <td>{{ $product->published }}</td>
            <td>{{ $product->meta_title }}</td>
            <td>{{ $product->meta_description }}</td>
            <td>{{ $product->facebook_title }}</td>
            <td>{{ $product->facebook_desc }}</td>
            <td>{{ $product->twitter_post_title }}</td>
            <td>{{ $product->twitter_post_description }}</td>
            <td>{{ $product->notes_section }}</td>
            <td>{{ $product->mpn }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->demo_button_text }}</td>
            <td>{{ $product->cta_button_text }}</td>
            <td>{{ $product->cta_url }}</td>
            <td>{{ $product->status_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-default btn-xs'>
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

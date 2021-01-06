<div class="table-responsive">
    <table class="table" id="whitePapers-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Published</th>
        <th>Page Text</th>
        <th>Excerpt</th>
        <th>Slug</th>
        <th>Meta Title</th>
        <th>Meta Description</th>
        <th>Facebook Title</th>
        <th>Facebook Desc</th>
        <th>Twitter Post Title</th>
        <th>Twitter Post Description</th>
        <th>Contributor</th>
        <th>Contributor Link</th>
        <th>Contributor 2</th>
        <th>Contributor 2 Link</th>
        <th>Author Id</th>
        <th>Status Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($whitePapers as $whitePaper)
            <tr>
                <td>{{ $whitePaper->title }}</td>
            <td>{{ $whitePaper->published }}</td>
            <td>{{ $whitePaper->page_text }}</td>
            <td>{{ $whitePaper->excerpt }}</td>
            <td>{{ $whitePaper->slug }}</td>
            <td>{{ $whitePaper->meta_title }}</td>
            <td>{{ $whitePaper->meta_description }}</td>
            <td>{{ $whitePaper->facebook_title }}</td>
            <td>{{ $whitePaper->facebook_desc }}</td>
            <td>{{ $whitePaper->twitter_post_title }}</td>
            <td>{{ $whitePaper->twitter_post_description }}</td>
            <td>{{ $whitePaper->contributor }}</td>
            <td>{{ $whitePaper->contributor_link }}</td>
            <td>{{ $whitePaper->contributor_2 }}</td>
            <td>{{ $whitePaper->contributor_2_link }}</td>
            <td>{{ $whitePaper->author_id }}</td>
            <td>{{ $whitePaper->status_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['whitePapers.destroy', $whitePaper->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('whitePapers.show', [$whitePaper->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('whitePapers.edit', [$whitePaper->id]) }}" class='btn btn-default btn-xs'>
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

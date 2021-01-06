<div class="table-responsive">
    <table class="table" id="careers-table">
        <thead>
            <tr>
                <th>Job Title</th>
        <th>Open Date</th>
        <th>Close Date</th>
        <th>Job Description</th>
        <th>About Code Section</th>
        <th>Published</th>
        <th>Apply Link</th>
        <th>Slug</th>
        <th>View Count</th>
        <th>Department Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($careers as $career)
            <tr>
                <td>{{ $career->job_title }}</td>
            <td>{{ $career->open_date }}</td>
            <td>{{ $career->close_date }}</td>
            <td>{{ $career->job_description }}</td>
            <td>{{ $career->about_code_section }}</td>
            <td>{{ $career->published }}</td>
            <td>{{ $career->apply_link }}</td>
            <td>{{ $career->slug }}</td>
            <td>{{ $career->view_count }}</td>
            <td>{{ $career->department_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['careers.destroy', $career->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('careers.show', [$career->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('careers.edit', [$career->id]) }}" class='btn btn-default btn-xs'>
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

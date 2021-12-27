<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Category</th>
        <th>Image</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td><img src="{{ asset('public/uploadFiles/'.$row->img) }}" height="20px;" ?></td>
            <td>
                @if($row->status == 1)
                Active
                @else
                In-Active
                @endif
            </td>
            <td>
                <button class="btn btn-success" onclick="categoryModal({{$row->id}})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                <button class="btn btn-danger" onclick="delete_record('categories', 'id', {{$row->id}})"><i class="fa fa-minus-circle" aria-hidden="true"></i> Delete</button>
            </td>
        </tr>
        @endforeach
     
    </tbody>
  </table>

  {!! $data->render() !!}
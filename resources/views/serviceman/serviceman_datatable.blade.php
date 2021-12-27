<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->mobile }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->address }}</td>
            <td>
                <button class="btn btn-success" onclick="categoryModal({{$row->id}})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                <button class="btn btn-danger" onclick="delete_record('categories', 'id', {{$row->id}})"><i class="fa fa-minus-circle" aria-hidden="true"></i> Delete</button>
            </td>
        </tr>
        @endforeach
     
    </tbody>
  </table>

  {!! $data->render() !!}
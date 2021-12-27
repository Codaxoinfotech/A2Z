<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Package Name</th>
        <th>Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->amount }}</td>
            
            <td>
                <button class="btn btn-success" onclick="EditModal({{$row->id}})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
            </td>
        </tr>
        @endforeach
     
    </tbody>
  </table>

  {!! $data->render() !!}
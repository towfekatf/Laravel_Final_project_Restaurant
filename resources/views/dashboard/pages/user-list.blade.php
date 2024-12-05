@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <section class="content">

<div class="container-fluid">
  <div class="card py-10">
    <div class="card-header">
      <h3 class="card-title">Responsive Hover Table</h3>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>SL</th>
            <th>NUM</th>
            <th>Email</th>
            <th>ADDRESS</th>
            <th>ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $data)
              
         
          <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>
           <a href=" {{route ('user.delete',$data->id)}}" class="boarder p-1.5 boarder-red 500 text-red-500 hover:text-green hover bg-white-500"><i class="fa-solid fa-trash"></i></td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
  </section>
</div>
@endsection
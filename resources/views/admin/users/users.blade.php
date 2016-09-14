@extends('layout.default')

@section('content')
  <link rel="stylesheet" href="{{ url('plugins/datatables/dataTables.bootstrap.css') }}">

 <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Users
        </h1>
        
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box">
            <!-- <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th class="center">Status</th>
                  <th class="center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td width="10%" class="center">@if (!empty($user->activate)) <small class="label label-success"><i class="fa fa-check"></i> Active</small> @else <small class="label label-danger"><i class="fa fa-close"></i> Deactive</small> @endif</td>
                  <td width="10%" class="center">
                  <a href="#" class="" data-toggle="modal" data-target="#exampleModal" title="Edit" data-whatever="{{ $user->id }}"><i class="fa fa-edit"></i></a>  &nbsp;&nbsp;
                  <a href="#" title="Deactive"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>

            <!-- /.box-body -->
          </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">User</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="name" class="control-label">Name :</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" class="form-control" id="email"> 
                  </div>
                  <div class="form-group">
                   <label for="email" class="control-label">Active :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="checkbox" name="active" id="active">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div> 
<style type="text/css">
  .center{
    text-align: center;
  }
</style>
@stop

@push('page.script')

<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () {
        $("#example1").DataTable();
    });

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var url = "{{ url('admin/users/') }}/"+recipient;
        var modal = $(this)
// console.log(url);
        $.post(url, { _token: "{{ csrf_token() }}" }, function(data){ 
            modal.find('.modal-title').text('User - ' + data.name);
            modal.find('#name').val(data.name);
            modal.find('#email').val(data.email);
            if(data.activate == 1){
                 modal.find( "#active" ).prop( "checked", true );
            }
        });

        
        
    })
</script>

@endpush
@extends('layout.default')

@section('content')
  <link rel="stylesheet" href="{{ url('plugins/datatables/dataTables.bootstrap.css') }}">

 <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Advertisements
        </h1>
               
        <ol class="breadcrumb">
          
         <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-plus"></i></button>
        </ol> 
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
                  <th>Advertisement</th>
                  <th>Type</th>
                  <th class="center">Status</th>
                  <th class="center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($advertisement as $add)
                <tr>
                  <td>{{ $add->advertisement }}</td>
                  <td>
                  @if ($add->type == 1) {{ 'Top' }} 
                  @elseif ($add->type == 2) {{ 'Bottom' }} 
                  @elseif ($add->type == 3) {{ 'Left' }} 
                  @else {{ 'Right' }} 
                  @endif

                 </td>
                  <td width="10%" class="center">@if (!empty($add->activate)) <small class="label label-success"><i class="fa fa-check"></i> Active</small> @else <small class="label label-danger"><i class="fa fa-close"></i> Deactive</small> @endif</td>
                  <td width="10%" class="center">

             

                  <a href="#" class="" data-toggle="modal" data-target="#exampleModal" title="Edit" data-whatever="{{ $add->id }}"><i class="fa fa-edit"></i></a>  &nbsp;&nbsp;
                  @if (!empty($add->activate))
                  <a href="{{route('admin.deactive_advertisement', ['id' => $add->id])}}" title="Deactive"><i class="fa fa-trash-o"></i></a>
                  @else 
                  <a href="{{route('admin.deactive_advertisement', ['id' => $add->id])}}" title="Active"><i class="fa fa-check"></i></a>
                  @endif

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
                <h4 class="modal-title" id="exampleModalLabel">Advertisement</h4>
              </div>
                <div class="modal-body">
               {!! Form::open([
                    'route'     => ['admin.updateadvertisement'],
                    'files'     => true,
                    'id'    => 'updateadvertisement',
                ]) !!}
            
               
                  <div class="form-group">
                    <label for="name" class="control-label">Advertisement :</label>
                    <textarea name="advertisement" class="form-control" id="advertisement"></textarea>

                  </div>
                  <div class="form-group">
                    <label for="email" class="control-label">Type</label>
                   <select class="form-control" name="type" id="type">
                    <option value="1">Top</option>
                    <option value="2">Bottom</option>
                    <option value="3">Left</option>
                    <option value="4">Right</option>
                  </select>
                  </div>
                  <div class="form-group">
                   <input type="hidden" name="id" value="" id="advertisementid">
                   <label for="active" class="control-label">Active :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="active" type="checkbox" name="active" id="active">
              </div>

              <div class="modal-footer">
                <button type="submit" id="saveval" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </form>

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
        var url = "{{ url('admin/advertisement/') }}/"+recipient+"/getaddval";
        var modal = $(this)

        $.post(url, { _token: "{{ csrf_token() }}" }, function(data){ 

            modal.find('#advertisement').val(data.advertisement);
            modal.find("#type").val(data.type);
            modal.find('#advertisementid').val(recipient);

            if(data.activate == 1){
                 modal.find( "#active" ).prop( "checked", true );
            }
        });
        
    });


   

</script>

@endpush
@extends('adminlte::page')

@section('content_header')
    <h1>Company Details</h1>
@stop

@section('content')
    @section('content')
    <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{url('/company/add')}}"><button type="button" class="btn btn-success">New Company </button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Train Number</th>
                                        <th>Line Number</th>
                                        <th>Arrival Time</th>
                                        <th>Action</th>
									 </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                    <tr class="odd gradeX">
                                       <td><?= $i++;?></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       
                                       <td><a  class="fa fa-pencil btn btn-primary" href=""></a>
                                        <a class="fa fa-trash btn btn-danger" href=""></a></td>
                                    </tr>
                                 
                                </tbody>
                            </table>
                            </div>
                            </div><!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
          
@stop
@section('js')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script>//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js</script>
@stop



@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@stop
@stop
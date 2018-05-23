@extends('adminlte::page')



@section('content_header')

    <h1 class="fa fa-television"> Add Company Details</h1>
  @stop

@section('content')
    <div id="page-wrapper">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-success" onclick="goBack()"> Go Back</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="contener">
                                <div class="row">
                                 
                                
                                <form  method="post" action="">
                                 {{ csrf_field() }}
                                     <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="comapnyName" id="comapnyName" placeholder="Enter Comapny Name" required>
                                     </div>
                                      <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="comapnyName" id="comapnyName" placeholder="Enter Comapny Name" required>
                                     </div>
                                
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn btn-success" > Save</button>
                                        </div>
                                </form>
                                </div>
                            </div>
                            
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
function goBack() {
    window.history.back();
}
</script>
@stop
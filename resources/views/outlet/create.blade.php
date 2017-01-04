@extends('admin_template')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <div class="box box-info">

                <div class="box-header with-border">
                    <h3 class="box-title">New</h3>
                </div>
                <form role="form" class="form-horizontal">
                    <div class="box-body">
                        <!-- name -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter name">
                            </div>
                        </div>

                        <!-- description -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
                            </div>
                        </div>

                        <!-- coordinates -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Coordinates</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter coordinates">
                            </div>
                        </div>


                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-6'>

        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection
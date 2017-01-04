@extends('admin_template')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Show</h3>
                </div>
                <form role="form" class="form-horizontal">
                    <div class="box-body">
                        <!-- name -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="hidden" value="{{ $outlet['id'] }}">
                                <input type="text" class="form-control" placeholder="Enter name" value="{{ $outlet['name'] }}">
                            </div>
                        </div>

                        <!-- description -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" placeholder="Enter description">{{ $outlet['description'] }}</textarea>
                            </div>
                        </div>

                        <!-- coordinates -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Coordinates</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter coordinates" value="{{ $outlet['coordinates'] }}">
                            </div>
                        </div>


                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save Changes</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-6'>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Pages</h3>
                </div>

                <div class="box-body">


                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i> New</button>
                </div>
                <!-- /.box-footer -->

            </div>
            <!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection
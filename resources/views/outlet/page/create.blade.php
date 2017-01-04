@extends('admin_template')

@section('page_styles')

@endsection

@section('content')
    <div class='row'>
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Outlet Page
                        <small>MENU/OFFERS/PROMOS</small>
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <!--<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>-->
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            Create page here!!!
                    </textarea>
                    </form>
                </div>
            </div>
            <!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('page_script')
    <!-- CK Editor -->
    <script src="{{ asset ("/vendor/unisharp/laravel-ckeditor/ckeditor.js") }}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
@extends('layouts.template')
@section('content')
<div class="container">
	<div class="row">
		<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            Create New Post
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("posts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control"title required>
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
                <!-- <p class="helper-block">
                    {{ trans('cruds.post.fields.posttitle') }}
                </p> -->
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" name="filename" id="filename">
                <label class="custom-file-label" for="filename">Choose file</label>
            </div>
           

                <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Write    SBA-M Library Information Post Body Here</h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                                </div><!-- /. tools -->
                            </div><!-- /.box-header -->
                            <div class="box-body pad">

                                <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1" required></textarea>

                            </div>
                        </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="Create Post">
                </div>
            </form>
        </div>
    </div>
   <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
   <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
   
   <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>

	</div>
	
</div>

@endsection
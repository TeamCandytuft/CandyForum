@extends ('layouts.default')
@section ('content')
<form action="/posts" method="post" id="comment-form" class="col-lg-12 form-group">
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
<input type="text" name="header" placeholder="Header" class="form-control"/>
<textarea name="content" id="editor" class="form-control"></textarea>
<script>
    CKEDITOR.replace('editor');
</script>
    <select class="form-control" name="category">
        <option value="-1" disabled selected>Category</option>
        <?php $categories = Category::all(); ?>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
<input type="submit" value="Submit" class="btn btn-md btn-default"/>
<a class="small" style="float: right" href="http://ckeditor.com/" target="_blank">CKEditor Open Source</a>
</form>
@stop
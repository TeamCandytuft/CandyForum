@extends ('layouts.default')
@section ('content')
<form action="/posts/view" method="post">
<textarea name="editor" id="editor"></textarea>
<script>
    CKEDITOR.replace('editor');
</script>
<input type="submit" value="Submit"/>
</form>
@stop
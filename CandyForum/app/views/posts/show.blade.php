@extends ('layouts.default')
@section ('content')
<?php $posts = $post; ?>
<div>
    <?php var_dump($posts); ?>
</div>
<div class="thread">
    <div class="answerBox"></div>
    <button id="answer-button" type="button" onclick="addAnswer()">Answer</button>
</div>
<form action="" method="post" id="answer-form" class="col-lg-12 form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="author_id" value="{{ Auth::id() }}"/>
    @if(Auth::id() == 0)
    <input type="email" name="author" required placeholder="Enter email"/>
    @endif
    <textarea name="content" id="answer" class="form-control"></textarea>
    <input type="submit" value="Submit" class="btn btn-md btn-default"/>
    <a class="small" style="float: right" href="http://ckeditor.com/" target="_blank">CKEditor Open Source</a>
    <script>
        CKEDITOR.replace('answer');
    </script>
</form>
<script>
    //$('#answer-form').hide();
    document.getElementById('answer-form').style.display = 'none';
</script>

<h1>Guest user id: 0</h1>
<h1>Registered user id != 0</h1>
@stop
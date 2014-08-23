<!DOCTYPE html>
<html>
    <head>
        <title>Post form</title>
        <link rel="stylesheet" href="{{ asset('css/comment.css') }}"/>
    </head>
    <body>
        <header></header>
        <section>
            <form id="comment-form" action="addComment" method="post">
                <section id="comment-box">
                    <div id="top-menu">
                        <div id="controls">
                            <div id="font-style">
                                <button type="button" id="bold" class="font-btn">B</button>
                                <button type="button" id="italic" class="font-btn">I</button>
                                <button type="button" id="underline" class="font-btn">U</button>
                            </div>
                            <div id="align">
                                <button type="button" id="left" class="align-btn">L</button>
                                <button type="button" id="center" class="align-btn">C</button>
                                <button type="button" id="right" class="align-btn">R</button>
                            </div>
                        </div>
                    </div>
                    <div id="text">
                        <textarea name="comment-content" id="comment-content" cols="50" rows="25"></textarea>
                    </div>
                </section>
                <div id="control-btns">
                    <button type="submit">Коментирай</button>
                    <button type="button">Затвори коментара</button>
                </div>
            </form>
        </section>
    </body>
</html>
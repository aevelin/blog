<div class="span8">
    <?foreach($posts as $post):?>
        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?= $post['post_subject']; ?></a></h1>
        <p><?= $post['post_text']; ?></p>
        <div>
            <span class="badge badge-success">Posted <?= $post['post_created']; ?></span>
            <div class="pull-right"><span class="label"><?=$post['user_id'] ?></span>
                <span class="label">story</span> </div>
            <span class="label">blog</span>
            <span class="label">personal</span>
        </div>
        <hr>
    <?endforeach?>
</div>
<div class="container">
    <div class="well">
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading"><?php echo $post['post_subject'];?></h4>
                <p class="text-right"><?php echo $post['name'];?></p>
                <p><?php echo $post['post_text'];?></p>
                <ul class="list-inline list unstyled">
                    <li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo $post['post_created'];?></span></li>
                    <li>|</li>
                    <?foreach ($tags as $tag):?><a href="#"><span class="label label-info"><?=$tag['tag_name']?></span></a>
                    <span><i class="glyphicon glyphicon-comment"></i><?php echo $comment['comment_text'];?></span>
                </ul>
            </div>
        </div>
    </div>
</div>
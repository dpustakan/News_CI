<html>
    <title><?php $title ?></title>
    
    <?php foreach($news as $news_item): ?> 
        <h2><?php echo $news_item['title']; ?></h2>
        <div class="main">
            <p><?php echo $news_item['text'];?></p>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View Article</a></p>
    <?php endforeach; ?>
</html>
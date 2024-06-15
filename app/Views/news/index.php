<h2><?=esc($title)?></h2>
<?php if ($news_list !== []): ?>

    <?php foreach ($news_list as $news_item): ?>

        <h3><?=esc($news_item['title'])?></h3>

        <div class='main'>
            <?=esc($news_item['body'])?>
        </div>
        <p>
            <a href="/news/<?=esc($news_item['slug'], 'url')?>">View more...</a>
        </p>

    <?php endforeach;?>

<?php else: ?>

    <h3>Sorry! No News avalaible!</h3>
    <p>Unable to find any news according your search.</p>

<?php endif;?>
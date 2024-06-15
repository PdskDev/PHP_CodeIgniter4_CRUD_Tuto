<h2><?=esc($title)?></h2>

<?=session()->getFlashdata('error')?>
<?=validation_list_errors()?>

<form action="/news" method="post">
    <?=csrf_field()?>
    <label for="title">Title</label>
    <input type="input" name="title" id="title" value="<?=set_value('title')?>">
    <br>
    <label for="body">Text</label>
    <textarea name="body" id="body" rows="4" cols="45"><?=set_value('body')?></textarea>
    <br>
    <input type="submit" name="submit" value="Add New">
    <br>
</form>
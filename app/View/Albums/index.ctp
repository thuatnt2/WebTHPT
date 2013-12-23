<ol class="breadcrumb">
	<li><?php echo $this->Html->link('Trang chủ', '/'); ?></li>
	<li>Album ảnh</li>
</ol>
<?php foreach ($albums as $row): ?>
    <h4><?php echo $row['Album']['name'] ?></h4>
    <p style="font-size: 0.85em" ><?php echo '(Ngày đăng: ' . $row['Album']['created_at'] . ')' ?></p>
    <?php foreach ($row['Photo'] as $key => $value): ?>
        <a href="<?php echo 'img/albums/' . $value['album_id'] . '/' . $value['url'] ?>" class="fancybox-buttons"data-fancybox-group="<?php echo 'album-' . $value['album_id'] ?>"  rel="gallery" title="<?php echo $row['Album']['name'] ?>">
            <?php echo $this->Html->image('albums/' . $value['album_id'] . '/' . $value['url'], array('alt="Facebook" width="85" height="65"')) ?>
        </a>
    <?php endforeach; ?>

<?php endforeach; ?>
<script>
    $(document).ready(function() {
        $('.fancybox-buttons').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            prevEffect: 'none',
            nextEffect: 'none',
            closeBtn: false,
            helpers: {
                title: {
                    type: 'inside'
                },
                buttons: {}
            },
            afterLoad: function() {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });
    });
</script>

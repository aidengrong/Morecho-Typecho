<div class="dynamic-hide">
<div class="card card-site-meta">
    <div class="title">站点信息</div>
    <div class="site-meta row text-center">
        <div class="col-4">
            <div><?php echo get_post_num(); ?></div>
            <div>文章</div>
        </div>
        <div class="col-4">
            <div><?php echo get_comment_num(); ?></div>
            <div>评论</div>
        </div>
        <div class="col-4">
            <div><?php echo get_last_update() ?></div>
            <div>更新</div>
        </div>
    </div>
</div>

<?php if ($this->is('post')||$this->is('page')): ?>
<div class="card card-post-meta">
    <div class="title">文章信息</div>
    <div class="site-meta row text-center">
        <div class="col-4">
            <div><?php $this->author(); ?></div>
            <div>作者</div>
        </div>
        <div class="col-4">
            <div><?php echo (string)mb_strlen(str_replace(PHP_EOL,'',strip_tags($this->content)),'utf-8'); ?></div>
            <div>字数</div>
        </div>
        <div class="col-4">
            <div><?php $this->date('y/m/d'); ?></div>
            <div>修改</div>
        </div>
    </div>
    <div class="tags">
        <?php $this->tags(' ', true, ''); ?>
    </div>
</div>
<?php endif ?>
</div>

<?php if($this->options->musicUrl): ?>
<div class="card card-musicbox">
    <audio id="player"><source src="<?php $this->options->musicUrl(); ?>" type="audio/mp3" /></audio>
    <?php if($this->options->musicName): ?><div class="title" style="padding-bottom: 1rem"><?php $this->options->musicName(); ?></div><?php endif ?>
    <div class="music-controls paused">
        <!--span class="backward"><i data-feather="chevrons-left"></i></span-->
        <span class="pause"><i data-feather="pause"></i></span>
        <span class="play"><i data-feather="play"></i></span>
        <!--span class="forward"><i data-feather="chevrons-right"></i></span-->
        <span class="loading" style="display:none"><i data-feather="loader"></i></span>
        <div class="progress">
            <div class="progress-bar" role="progressbar"></div>
            <div class="progress-bar" role="progressbar" style="background-color: rgba(0,123,255,0.2)"></div>
        </div>
    </div>
</div>
<?php endif ?>

<?php if ($this->is('post')||$this->is('page')): ?>
<div class="card card-toc">
    <div class="js-toc-move"></div>
    <div class="js-toc toc"></div>
</div>
<?php endif ?>
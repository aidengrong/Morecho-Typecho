<div class="card card-nav">
    <div class="search">
        <form>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i data-feather="search"></i></div>
                </div>
                <input type="text" class="form-control" placeholder="搜索">
            </div>
        </form>
    </div>

    <div class="owner">
        <?php if($this->is('post')): ?>
            <?php echo $this->author->gravatar($size=256,$rating = 'X', $default = NULL,$class='shadow');?>
        <?php elseif($this->options->avatar): ?>
            <img class="shadow" src="<?php $this->options->avatar(); ?>">
        <?php endif ?>
        <?php if($this->is('post')): ?>
            <p class="owner-name"><?php $this->author(); ?></p>
        <?php elseif($this->options->owner): ?>
            <p class="owner-name"><?php $this->options->owner(); ?></p>
        <?php endif ?>
    </div>

    <div class="site-controls text-center align-middle">
        <div class="row">
            <div class="col-4 active" data-tab="navigation"><a href="javascript:;"><i data-feather="compass"></i><br /><span>导航</span></a></div>
            <div class="col-4" data-tab="folder"><a href="javascript:;"><i data-feather="folder"></i><br /><span>归档</span></a></div>
            <div class="col-4" data-tab="setting"><a href="javascript:;"><i data-feather="settings"></i><br /><span>设置</span></a></div>
        </div>
    </div>

    <div class="site-control">
        <div data-tab="navigation" class="active">
            <nav class="nav flex-column nav-pills">
                <a class="nav-link <?php if($this->is('index')): ?>active<?php endif; ?>" href="/">首页</a>
                <?php $this->widget('Widget_Contents_Page_List') -> to($pages); ?>
                <?php while($pages->next()): ?>
                    <a class="nav-link <?php echo $this->is('page', $pages->slug)?'active':''; ?>" 
                        href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </nav>
        </div>
        <div data-tab="folder">
            <nav class="nav flex-column nav-pills">
                <a class="nav-link" href="/archive/">文章归档</a>
            </nav>
        </div>
        <div data-tab="setting">
            <div class="title">主题</div>
            <div class="theme-control row">
                <div class="col"><div class=""></div></div>
                <div class="col"><div class="theme-front-green"></div></div>
                <div class="col"><div class="theme-front-orange"></div></div>
            </div>
            <?php if ($this->user->hasLogin()): ?>
            <div class="title">已登录</div>
            <nav class="nav flex-column nav-pills">
                <a class="nav-link active" href="<?php $this->options->profileUrl(); ?>"><?php _e('个人设置'); ?></a>
                <a class="nav-link" href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
            </nav>
            <?php endif ?>
        </div>
    </div>

    <div style="height:5rem"></div>
</div>

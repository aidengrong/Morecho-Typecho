## 为什么会制作配套插件

因为Morecho增加了一些Typecho本没有的功能，而仅仅通过主题不能提供足够好的使用体验。
另外，由于Morecho是以开启配套插件为前提开发的，同时尽量使主题可以单独使用。所以我推荐开启配套插件。

## 插件介绍

### MorechoCore

包含各种基本的零碎的功能，比如：

1. 修改了后台外观，使后台预览支持主题增加的 markdown 功能（不完善），修复了移动端的 bug
1. 修改了 markdown 解析器和编辑器，在服务端支持了主题增加的 markdown 功能
1. 增加了全部文章归档的页面

主要目的是在后台界面提供与前台一样的体验，也会放置一些零碎功能

### MorechoFriends

增强友链体验

1. 在数据库`user`表中增加`introduction`字段，可以被任何主题正常读取
1. 增加`/link/`友链页面，依赖于注册用户信息，根据用户组对友链类型进行分类
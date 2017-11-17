<?php if (!defined('THINK_PATH')) exit();?><?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><meta name="exporter-version" content="Evernote Mac 6.8 (453748)"/><meta name="altitude" content="37.45833206176758"/><meta name="author" content="285561932@qq.com"/><meta name="created" content="2016-03-01 03:09:02 +0000"/><meta name="latitude" content="40.10155345457476"/><meta name="longitude" content="116.3282757999797"/><meta name="source" content="desktop.mac"/><meta name="updated" content="2016-04-05 18:27:58 +0000"/><title>Git笔记</title></head><body>
<div><span style="color: rgb(255, 43, 14);"><span style="font-size: 24px;"><span style="font-family: STFangsong;"><a href="/Public/Home/Git.doc">Git安装手册下载</a><br><a href="/Public/Home/GitDownload.zip">Git安装包下载</a><br>1.什么是Git（<span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 28px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">傻瓜内容跟踪器</span>）</span></span></span></div>
<div><span style="font-family: STFangsong;">     <span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 28px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">Git是一款免费、开源的分布式版本控制系统，用于敏捷高效地处理任何或小或大的项目</span></span></div>
<div><span style="font-family: STFangsong;"><span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 28px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">Git 是 Linus Torvalds （</span><span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">Linus在1991年创建了开源的Linux</span><span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 28px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">）为了帮助管理 Linux 内核开发而开发的一个开放源码的版本控制软件。</span></span></div>
<div><span style="font-family: STFangsong;"><br/></span></div>
<div><span style="font-size: 24px;"><span style="color: rgb(255, 43, 14);"><span style="font-family: STFangsong;">2.Git发展的历史：</span></span></span></div>
<div>
<div style="orphans: auto; text-align: start; text-indent: 0px; widows: 1;">
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     1.在2002年以前，世界各地的志愿者把源代码文件通过diff的方式发给Linus，然后由Linus本人通过手工方式合并代码！（<span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">因为Linus坚定地反对CVS和SVN，这些集中式的版本控制系统不但速度慢，而且必须联网才能使用</span>）</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     2.<span style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">到了2002年，Linux系统已经发展了十年了，代码库之大让Linus很难继续通过手工方式管理了，社区的弟兄们也对这种方式表达了强烈不满，于是Linus选择了一个商业的版本控制系统BitKeeper，BitKeeper的东家BitMover公司出于人道主义精神，授权Linux社区免费使用这个版本控制系统。</span></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;"><span style="background-color: rgb(255, 255, 255);">     3.</span>安定团结的大好局面在2005年就被打破了，原因是Linux社区牛人聚集，不免沾染了一些梁山好汉的江湖习气。开发Samba的Andrew试图破解BitKeeper的协议（这么干的其实也不只他一个），被BitMover公司发现了（监控工作做得不错！），于是BitMover公司怒了，要收回Linux社区的免费使用权。</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">Linus可以向BitMover公司道个歉，保证以后严格管教弟兄们，嗯，这是不可能的。实际情况是这样的：</span></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     4.Linus花了两周时间自己用C写了一个分布式版本控制系统，这就是Git！一个月之内，Linux系统的源码已经由Git管理了！牛是怎么定义的呢？大家可以体会一下。</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     Git迅速成为最流行的分布式版本控制系统，尤其是2008年，GitHub网站上线了，它为开源项目免费提供Git存储，无数开源项目开始迁移至GitHub，包括jQuery，PHP，Ruby等等。</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
<div><span style="font-family: STFangsong;">     历史就是这么偶然，如果不是当年BitMover公司威胁Linux社区，可能现在我们就没有免费而超级好用的Git了。</span></div>
</div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;"><br/></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(255, 43, 14);"><span style="font-size: 24px;"><span style="font-family: STFangsong;">3.与SVN的对比</span></span></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(49, 82, 254);"><span style="font-family: STFangsong;">集中式版本控制系统（中央服务器）</span></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;"><img src="/Public/Home/FDA28CBE-F544-459E-A193-14A503074F94.png" height="297" width="411"/></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">缺点：</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     1.每次提交代码都需要联网（没网，或者网速比较慢）</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     2.每次提交都是直接提交到中央服务器，自己做项目不可能一气呵成，却没有自己的代码管理版本<br/></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;"><br/></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(49, 82, 254);"><span style="font-family: STFangsong;">分布式版本控制系统（每个人的电脑都有一个库）</span></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div><img src="/Public/Home/3F6452C3-6617-4CDB-A416-F77EAFC206F3.png" height="433" width="504"/></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div><span style="font-family: STFangsong;"> <span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;">优点</span></span></span></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">1.不需要联网（相对的，比如最终代码的合并是需要联网的）</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">2.可以有一个自己的版本库，不污染其他成员的代码，也方便自己的管理（</span><span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">强大的分支管理</span><span style="font-family: STFangsong;">）</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(255, 43, 14);"><span style="font-size: 24px;"><span style="font-family: STFangsong;">4.Git安装</span></span></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     Ubuntu 14.04安装:sudo apt-get install git</span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     Windows下载</span></div>
<div style="background-color: rgb(255, 255, 255);"><font face="STFangsong">     git config —global user.name “zhangsan"</font></div>
<div style="background-color: rgb(255, 255, 255);"><font face="STFangsong">     git config —global user.email “285561932@qq.com"</font></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;"><br/></span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);"><span style="font-family: STFangsong;">创建版本库</span></span></span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">     1. 新建目录 test</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">     2. git init：将此目录变为git可以管理的仓库</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">          .git:跟踪管理版本的，不要随便修改里面的文件</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;"><br/></span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);"><span style="font-family: STFangsong;">文件操作</span></span></span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">     git status     查看当前工作区状态</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">     git add readme.txt     添加文件到暂存区</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">     git commit -m “第一个文件” 提交文件到版本库，并做说明</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-family: STFangsong;">     git diff readme.txt     比较readme.txt的前后版本不同地方</span></div>
<div style="background-color: rgb(255, 255, 255);">
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;"><br/></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     git log     查看历史版本</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">          git log --pretty=oneline     只输出一行</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     git reset —hard  HEAD^     回退到上一个版本</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">               git reset —hard HEAD~10 回退上10次</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">               git reset —hard  3C3981     回退到指定的版本</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     git reflog     查看版本历史</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;"><br/></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;"><span style="font-family: STFangsong;">工作区和暂存区</span></span></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     工作区：test目录就是工作区</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     版本库：.git</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     暂存区：state</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     head：指针</span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-family: STFangsong;">     master：当前分支<br/></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><img src="/Public/Home/FAB1DEDA-B30E-45CB-A091-C91095F7A0D8.png" height="234" width="458"/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git add readme.txt     将文件添加到暂存区</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git commit -m “修改"     将暂存区的文件合并到当前的分支</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;">git跟踪管理的是修改，而非文件</span></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">vi index.php(修改index.php)</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git add index.php(将index.php文件添加到暂存区)</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">vi index.php（再次修改index.php）</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git commit -m “修改"</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;">撤销修改：</span></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git checkout — readme.txt     撤销readme.txt在工作去的修改</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git reset HEAD readme.txt     将暂存区的文件撤销，重新放回工作区（但是修改的内容并不会删除，需要删除，还需要git checkout —readme.txt）</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);">删除文件</span></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git add readme.txt</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">git commit -m “添加readme.txt"</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">两种办法</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">     1.rm readme.txt     直接删除</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">     2.git rm readme.txt</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">          git commit -m “delete readme.txt"</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;">撤销办法：</span></span></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">    删除文件，还没有提交：直接使用git checkout — readme.txt</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">    已经提交，找回删除文件（版本会退）：使用 git reset —hard HEAD^</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);">将代码存储到远程仓库（Git支持的协议很多，最安全的方式：采用非对称密钥对）</span></span></div>
</div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div>     1.生成密钥对</div>
</div>
</div>
<div style="background-color: rgb(255, 255, 255);">
<div style="padding: 10px; tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; orphans: auto; text-align: start; text-indent: 0px; widows: 1; background-color: rgb(250, 250, 250);">
<div><code><span style="color: rgb(0, 128, 128); font-family: Consolas, monospace, serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">$ </span><font color="#444444" face="Consolas, monospace, serif" size="2">ssh-keygen -t rsa -</font><span style="color: rgb(0, 153, 153); font-family: Consolas, monospace, serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">C</span><font color="#444444" face="Consolas, monospace, serif" size="2"> </font><font color="#DD1144" size="2">“</font><font color="#DD1144" face="Consolas, monospace, serif" size="2">123456@qq.com"</font></code></div>
</div>
</div>
<div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div>     2.在windows是家目录下有一个.ssh目录，进去目录找到 id_rsa.pub 文件 </div>
<div>     将id_rsa.pub的内容拷贝到远程仓库的管理处 settings处</div>
<div><br/></div>
<div>     3.OK搞定，以后所有的下载和上传都在ssh协议，会非常方便</div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);">现有本地库，再有远程库，做本地库关联远程库</span></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">     1.在github上新建一个空仓库</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">     2.git remote add origin <a href="https://github.com/sxycjj/test.git">https://github.com/sxycjj/test.git<span style="color: rgb(0, 0, 0);"> </span></a>      跟远程仓库关联     (删除远程库 git remote rm origin)</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">     3.git push -u origin master     向远程仓库提交文件</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">     </div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);">先创建远程库，从远程库克隆（一般就是下载别人的源代码）</span></span></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div>     git clone <a href="https://github.com/sxycjj/demo.git">https://github.com/sxycjj/demo.git</a></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div><br/></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div><span style="color: rgb(255, 43, 14);"><span style="font-size: 24px;">分支管理</span></span></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div>     1. 开发周期较长，一个功能需要时间较长，不能提交，也不能丢</div>
<div>     2. 当修复网站之前的bug的时候</div>
<div><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);">创建与合并分支</span></span></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">查看分支：git branch</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">创建分支：git branch &lt;name&gt;</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">切换分支：git checkout &lt;name&gt;</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">创建+切换分支：git checkout -b &lt;name&gt;</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">合并某分支到当前分支：git merge &lt;name&gt;</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div style="background-color: rgb(255, 255, 255);">删除分支：git branch -d &lt;name&gt;</div>
<div style="background-color: rgb(255, 255, 255);"><br/></div>
<div style="background-color: rgb(255, 255, 255);"><span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;">解决冲突：</span></span></div>
<div style="background-color: rgb(255, 255, 255);">     因为是直接修改文件，所以直接去掉不需要的内容</div>
<div style="background-color: rgb(255, 255, 255);"><br/></div>
<div style="background-color: rgb(255, 255, 255);">     查看分支的合并情况</div>
<div style="background-color: rgb(255, 255, 255);">
<div style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);">
<div><code>git log --graph --pretty=oneline --abbrev-commit</code></div>
</div>
</div>
<div style="background-color: rgb(255, 255, 255);">     查看分支合并情况</div>
<div style="background-color: rgb(255, 255, 255);">     <span style="color: rgb(221, 0, 85); font-family: Consolas, monospace, serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(250, 250, 250);">git log --graph</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Consolas, monospace, serif;"><span style="background-color: rgb(250, 250, 250);"><span style="color: rgb(221, 0, 85);"><br/></span></span></span></span></div>
<div><span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;"><span style="font-family: Consolas;">分支管理策略</span></span></span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">合并分支时，加上</span><code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);">--no-ff</code><span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">参数就可以用普通模式合并，合并后的历史有分支，能看出来曾经做过合并，而</span><code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);">fast forward</code><span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">合并就看不出来曾经做过合并。</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="background-color: rgb(255, 255, 255);"><span style="color: rgb(102, 102, 102);"><br/></span></span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);">Bug分支</span></span></div>
<div style="background-color: rgb(255, 255, 255);">
<div style="font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
<div><span style="color: rgb(102, 102, 102);">把当前工作现场“储藏”起来，等以后恢复现场后继续工作</span></div>
<div><span style="color: rgb(102, 102, 102);">git stash</span></div>
<div><span style="color: rgb(102, 102, 102);"><br/></span></div>
<div><span style="color: rgb(102, 102, 102);">查看被存储的工作现场</span></div>
<div>
<div style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);"><code>git stash list</code></div>
</div>
</div>
</div>
<div><br/></div>
<div>恢复工作现场</div>
<div>git stash apply 恢复 </div>
<div>git stash drop 删除</div>
<div><br/></div>
<div>上述两条命令合并为一条：git stash pop:恢复并删除</div>
<div><br/></div>
<div>恢复到指定的stash：
<div style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);">
<div><code>git stash apply stash@{<span style="color: rgb(0, 153, 153);">0</span>}</code></div>
</div>
</div>
<div style="background-color: rgb(255, 255, 255);"><br/></div>
<div style="background-color: rgb(255, 255, 255);"><span style="color: rgb(49, 82, 254);"><span style="font-size: 18px;">多人协作：</span></span></div>
<div style="background-color: rgb(255, 255, 255);">查看远程仓库信息</div>
<div style="background-color: rgb(255, 255, 255);">
<div style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);">
<div><code>git remote</code></div>
</div>
</div>
<div style="background-color: rgb(255, 255, 255);">显示更佳详细的信息</div>
<div style="background-color: rgb(255, 255, 255);">
<div style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);"><code><span style="color: rgb(0, 128, 128);"> </span>git remote -v</code></div>
</div>
<div><br/></div>
<div><span style="color: rgb(102, 102, 102);">推送分支，就是把该分支上的所有本地提交推送到远程库。推送时，要指定本地分支，这样，Git就会把该分支推送到远程库对应的远程分支上：</span></div>
<div style="background-color: rgb(255, 255, 255);">
<pre style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; word-break: break-all; word-wrap: break-word; white-space: pre-wrap; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);">
<code><span style="color: rgb(0, 128, 128);">$ </span>git push origin master
</code>
</pre>
<p style="word-wrap: break-word; white-space: pre-wrap; color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">如果要推送其他分支，比如<code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">dev</code>，就改成：</p>
<pre style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; word-break: break-all; word-wrap: break-word; white-space: pre-wrap; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);">
<code><span style="color: rgb(0, 128, 128);">$ </span>git push origin dev
</code>
</pre>
<p style="word-wrap: break-word; white-space: pre-wrap; color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">但是，并不是一定要把本地分支往远程推送，那么，哪些分支需要推送，哪些不需要呢？</p>
<ul style="padding-left: 30px; color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
<li>
<p style=" word-wrap: break-word; white-space: pre-wrap;"><code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">master</code>分支是主分支，因此要时刻与远程同步；</p>
</li>
<li>
<p style=" word-wrap: break-word; white-space: pre-wrap;"><code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">dev</code>分支是开发分支，团队所有成员都需要在上面工作，所以也需要与远程同步；</p>
</li>
<li>
<p style=" word-wrap: break-word; white-space: pre-wrap;">bug分支只用于在本地修复bug，就没必要推到远程了，除非老板要看看你每周到底修复了几个bug；</p>
</li>
<li>
<p style=" word-wrap: break-word; white-space: pre-wrap;">feature分支是否推到远程，取决于你是否和你的小伙伴合作在上面开发。</p>
</li>
</ul>
</div>
<div><br/></div>
<div style="background-color: rgb(255, 255, 255);">
<div style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">总之，就是在Git中，分支完全可以在本地自己藏着玩，是否推送，视你的心情而定！</div>
</div>
<div><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);"><br/></span></span></div>
<div><span style="font-size: 18px;"><span style="color: rgb(49, 82, 254);">同步更新远程仓库</span></span></div>
<div>     git pull</div>
<div>
<p style="word-wrap: break-word; white-space: pre-wrap; color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">git pull</code>也失败了，原因是没有指定本地<code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">dev</code>分支与远程<code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">origin/dev</code>分支的链接，根据提示，设置<code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">dev</code>和<code style="font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(221, 0, 85); white-space: nowrap; padding: 0px 4px; border: 1px solid rgb(221, 221, 221); border-radius: 3px; background: rgb(250, 250, 250);">origin/dev</code>的链接：</p>
<div style="padding: 10px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; font-family: Consolas, monospace, serif; color: rgb(68, 68, 68); tab-size: 4; overflow: auto; border: 1px solid rgb(221, 221, 221); border-radius: 3px; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background: rgb(250, 250, 250);"><code>$ git branch <span style="color: rgb(153, 153, 136); font-style: italic;">--set-upstream dev origin/dev</span><br/>
Branch dev <span style="color: rgb(51, 51, 51); font-weight: bold;">set</span> up <span style="color: rgb(51, 51, 51); font-weight: bold;">to</span> track remote branch dev <span style="color: rgb(51, 51, 51); font-weight: bold;">from</span> origin.</code></div>
</div>
<div style="background-color: rgb(255, 255, 255);"><br/></div>
<div style="background-color: rgb(255, 255, 255);">标签：</div>
<div style="background-color: rgb(255, 255, 255);"><span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(255, 255, 255);">Git的标签虽然是版本库的快照，但其实它就是指向某个commit的指针（跟分支很像对不对？但是分支可以移动，标签不能移动），所以，创建和删除标签都是瞬间完成的。</span></div>
<div style="background-color: rgb(255, 255, 255);"><br/></div>
<div style="background-color: rgb(255, 255, 255);">忽略文件: .<span style="color: rgb(221, 0, 85); font-family: Consolas, monospace, serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: rgb(250, 250, 250);">gitignore</span></div>
<div style="background-color: rgb(255, 255, 255);"><span style="font-size: 12px;"><span style="font-family: Consolas, monospace, serif;"><span style="background-color: rgb(250, 250, 250);"><span style="color: rgb(221, 0, 85);"><br/></span></span></span></span></div>
<div style="background-color: rgb(255, 255, 255);"><img src="/Public/Home/9E1A37C5-510C-4311-8CA6-8C5EE3B5C901.png" height="1301" width="920"/></div>
<div style="background-color: rgb(255, 255, 255);"><br/></div>
<div style="background-color: rgb(255, 255, 255);"><img src="/Public/Home/341208C3-5AC9-49E8-95A8-8049E972EFC0.png" height="1301" width="920"/></div>
</div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
<div style="background-color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br/></div>
</div>
</div>
</div>
</body></html>
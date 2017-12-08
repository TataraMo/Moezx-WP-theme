﻿<?php
/*
Template Name: 友情链接2
*/
?>
<?php get_header(); ?>
<div class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
	<figure class="top-image" id="ajax-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&w=1583&h=550&zc=1);"></figure>
	<canvas height="550" width="1585" id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>

<?php  if ( wp_is_mobile() == false ) { ?>
<div class="wrapper">
	
	<article class="block post linkpage">
			<h1 class="post-title" id="mclose">友人帐</h1>
			  <div class="container"> <em><p>随手写了一个纯CSS下拉菜单却没地方用，遂强行放到这里，然而，似乎并没有什么意义</p></em>
				<div class="row" style="margin-top: 2rem;">
				  <div class="t-collapse"><a class="collapse-target" href="#modal1"><i class="fa fa-angle-double-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>乱七八糟的个人 web 服务 ∠( ᐛ 」∠)＿</b></a>
					<div class="collapse-body" id="modal1">
					  <a class="collapse-close" href="#mclose"><i class="fa fa-angle-double-up" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>乱七八糟的个人 web 服务 ∠( ᐛ 」∠)＿</b></a>
					  <a class="close" href="#mclose">×</a>
						<ul>
							<?php
							$bookmarks = get_bookmarks( array(
								'orderby'        => 'name',
								'order'          => 'ASC',
								'category_name'  => 'me'
							));

							// Loop through each bookmark and print formatted output
							foreach ( $bookmarks as $bookmark ) {
								printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
							}
							?>
						</ul>
					</div>
				  </div>
				  <div class="t-collapse"><a class="collapse-target" href="#modal2"><i class="fa fa-angle-double-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>后宫的小伙伴们 ╮(￣▽￣)╭</b></a>
					<div class="collapse-body" id="modal2">
					  <a class="collapse-close" href="#mclose"><i class="fa fa-angle-double-up" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>后宫的小伙伴们 ╮(￣▽￣)╭</b></a>
					  <a class="close" href="#mclose">×</a>
						<ul>
							<?php
							$bookmarks = get_bookmarks( array(
								'orderby'        => 'name',
								'order'          => 'ASC',
								'category_name'  => 'normal'
							));

							// Loop through each bookmark and print formatted output
							foreach ( $bookmarks as $bookmark ) {
								printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
							}
							?>
						</ul>
					</div>
				  </div>
				  <div class="t-collapse"><a class="collapse-target" href="#modal3"><i class="fa fa-angle-double-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>好像阵亡了一些诶，谨以此悼念他们...（如果恢复了请留言告诉我哦）</b></a>
					<div class="collapse-body" id="modal3">
					  <a class="collapse-close" href="#mclose"><i class="fa fa-angle-double-up" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>好像阵亡了一些诶，谨以此悼念他们...（如果恢复了请留言告诉我哦）</b></a>
					  <a class="close" href="#mclose">×</a>
						<ul>
							<?php
							$bookmarks = get_bookmarks( array(
								'orderby'        => 'name',
								'order'          => 'ASC',
								'category_name'  => 'dead'
							));

							// Loop through each bookmark and print formatted output
							foreach ( $bookmarks as $bookmark ) {
								printf( '<li><a href="%s" target="_blank" rel="nofollow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
							}
							?>
						</ul>
					</div>
				  </div>
				  <div class="t-collapse"><a class="collapse-target" href="#modal4"><i class="fa fa-angle-double-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>下面推荐一些优秀的博客（真大佬）</b></a>
					<div class="collapse-body" id="modal4">
					  <a class="collapse-close" href="#mclose"><i class="fa fa-angle-double-up" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<b>下面推荐一些优秀的博客（真大佬）</b></a>
					  <a class="close" href="#mclose">×</a>
						<ul>
							<?php
							$bookmarks = get_bookmarks( array(
								'orderby'        => 'name',
								'order'          => 'ASC',
								'category_name'  => 'dalao'
							));

							// Loop through each bookmark and print formatted output
							foreach ( $bookmarks as $bookmark ) {
								printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
							}
							?>
						</ul>
					</div>
				  </div>
				</div>
			  </div><br>
			<p><em>欢迎交换友链哦</em>ꉂ(ˊᗜˋ)<em><br>请提供你的：<br><strong>1、名字</strong>；<strong><br>2、头像url</strong>（可以用我的 <a href="https://view.moezx.cc/" target="_blank">图床</a>）<strong><br>3、一句话简介</strong>（如果是熟人我会亲自帮你写一个介绍的~）<strong><br>4、主页地址</strong>~<br>Emmmm...如你所见，名字太长手机上看就悲催了，CSS排版方面我不太擅长的QAQ</em></p>
			<p>我的信息：<br>Name: Mashiro<br>Bio: 樱花庄的白猫<br>Avatar: <a href="https://view.moezx.cc/image/fhcp" target="_blank"> 链接(内附嵌入代码)</a><br>URL: https://2heng.xin</p>
	</article>
</div>
<?php } ?>
<?php  if ( wp_is_mobile() == true ) { ?>
<div class="wrapper">
	
	<article class="block post linkpage">
			<h1 class="post-title">友人帐</h1>

			<p><b>乱七八糟的个人 web 服务 ∠( ᐛ 」∠)＿</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'me'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><b>后宫的小伙伴们 ╮(￣▽￣)╭</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'normal'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><b>好像阵亡了一些诶，谨以此悼念他们...（如果恢复了请留言告诉我哦）</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'dead'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="nofollow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><b>下面推荐一些优秀的博客（真大佬）</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'dalao'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><em>欢迎交换友链哦</em>ꉂ(ˊᗜˋ)<em><br>请提供你的：<br><strong>1、名字</strong>；<strong><br>2、头像url</strong>（可以用我的 <a href="https://view.moezx.cc/" target="_blank">图床</a>）<strong><br>3、一句话简介</strong>（如果是熟人我会亲自帮你写一个介绍的~）<strong><br>4、主页地址</strong>~<br>Emmmm...如你所见，名字太长手机上看就悲催了，CSS排版方面我不太擅长的QAQ</em></p>
			<p>我的信息：<br>Name: Mashiro<br>Bio: 樱花庄的白猫<br>Avatar: <a href="https://view.moezx.cc/image/fhcp" target="_blank">链接(内附嵌入代码)</a><br>URL: https://2heng.xin</p>
</div>
<?php } ?>
<svg id="bigTriangleColor" width="100%" height="40" viewbox="0 0 100 102" preserveaspectratio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>
<div>
	<?php comments_template();?>
</div>
<div class="wrapper">
</div>
<?php get_footer();?>
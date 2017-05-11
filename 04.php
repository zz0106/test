<!-- html中嵌套php的控制语句 -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		section{
			height: 100px;
		}
	</style>
</head>
<body>
	<!-- foreach的用法 -->
	<?php $arr = ['zhangsan','lisi','wangwu']; ?>
	<ul>
		<?php  foreach ($arr as $value) :?>
			<li><?php echo $value; ?></li>
		<?php endforeach; ?>
	</ul>


	<!-- if else的用法 -->
	<?php $sex = false; ?>

	<?php if ($sex == true) :?>
		<div>这是一个男人</div>
	<?php else: ?>
		<p>这是一个女人</p>
	<?php endif; ?>

	
	<!-- for 循环的用法 -->
	<!-- 20个随机背景颜色的section -->
	<?php for ($i=0; $i < 20; $i++) :?>
		<section style="background-color: rgb(<?php echo rand(0,255); ?>, <?php echo rand(0,255); ?>, <?php echo rand(0,255); ?>);">

			section-<?php echo $i; ?>
			
		</section>
	<?php endfor; ?>




</body>
</html>
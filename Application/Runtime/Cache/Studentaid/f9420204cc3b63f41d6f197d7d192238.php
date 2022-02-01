<?php if (!defined('THINK_PATH')) exit();?>    <blockquote  style="border-left: 5px solid #ffffff;">
        <p>共<?php echo ($count); ?>幾筆</p>
    </blockquote>
<?php if(is_array($cho)): $k = 0; $__LIST__ = $cho;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($k % 2 );++$k;?><blockquote class="sc" id="<?php echo ($post['class_number']); ?>" style="border-left: 5px solid <?php echo ($post[color]); ?>;">
        <p><?php echo ($post['class_num']); ?>n_<?php echo ($post['class_name']); ?>
            <br><?php echo ($post['class']); ?> <?php echo ($post['obligatory']); ?></p>
        <p class="nonep">
            <?php echo ($post['class_sitname']); ?>
            <br>校區:<?php echo ($post['school']); ?></p>
    </blockquote><?php endforeach; endif; else: echo "" ;endif; ?>
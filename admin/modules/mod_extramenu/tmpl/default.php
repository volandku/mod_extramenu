<?php

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');
?>
<div class="row-striped">
	<?php if (count($list)) : ?>
        <div class="row-fluid">
		<?php foreach ($list as $i => $item) : ?>
				<div class="span1 ">
                    <button class="btn btn-small button-apply ">
                    <a
                       href="<?php echo $item['link']; ?>">
                        <?php echo JText::_($item['CTitle']?$item['CTitle']:$item['title']);
                        //var_dump($item);?>
                    </a>
                    </button>
				</div>
		<?php endforeach; ?>
        </div>
	<?php else : ?>
		<div class="row-fluid">
			<budiv class="span1">
                <button class="btn btn-small button-apply btn-success">Привет, я модуль <b>Дополнительная строчка меню</b>, настрой меня или прочитай <a href="https://github.com/volandku/mod_extramenu/blob/master/README.md">документацию</a></button>
			</div>
		</div>
	<?php endif; ?>
</div>

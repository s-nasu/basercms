<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ページネーションシンプル
 *
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2011, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi 
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2011, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
if(empty($paginator)) {
	return;
}
?>
<?php $paginator->options = array('url' => $this->passedArgs) ?>
<?php if((int)$paginator->counter(array('format'=>'%pages%')) > 1): ?>
<div class="pagination">
<?php echo $paginator->prev('< 前へ', array('class'=>'prev'), null, array('class'=>'disabled')) ?>
<?php echo $html->tag('span', $paginator->numbers(array('separator' => '', 'class' => 'number'), array('class' => 'page-numbers'))) ?>
<?php echo $paginator->next('次へ >', array('class'=>'next'), null, array('class'=>'disabled')) ?>
</div>
<?php endif; ?>
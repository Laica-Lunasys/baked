<?php
echo $this->Form->create('Block', array(
  'default' => FALSE,
  'data-block-editor-heading',
));
?>


<ul class="bk-editor-boxes">
  <li>
    <div class="bk-title"><?php echo __('Size') ?></div>
    <?php
    echo $this->Form->input('Block.h', array(
      'value' => $block['Block']['data']['h'],
      'options' => BlockHeading::$H,
      'class' => 'bk-block-input-h',
      'label' => FALSE,
    ));
    ?>
  </li>
  <li>
    <div class="bk-title"><?php echo __('Text') ?></div>
    <?php
    echo $this->Form->input('Block.text', array(
      'value' => $block['Block']['data']['text'],
      'class' => 'bk-block-input-text',
      'label' => FALSE,
    ));
    ?>
  </li>
</ul>

<button type="submit" class="bk-btn-mini"><?php echo __('Save') ?></button>

<?php
echo $this->Form->end();



<div class="main-banner-wp">
  <div class="block">
    <div class="main-banner" id="slideBox">
        <ul class="main-banner-hd hd">
            <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash']):
        $this->_foreach['myflash']['iteration']++;
?>
            <li></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <div class="bd">
            <ul class="main-banner-bd">
                <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash']):
        $this->_foreach['myflash']['iteration']++;
?>
                <li><a href="<?php echo $this->_var['flash']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['flash']['src']; ?>" alt=""></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <div class="main-banner-extra">
        <div class="small-banner">
            <?php 
$k = array (
  'name' => 'ads',
  'id' => '161',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            <?php 
$k = array (
  'name' => 'ads',
  'id' => '162',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#slideBox").slide({
    effect : "fold",
    autoPlay : true,
    mainCell : ".bd ul"
  });
</script>
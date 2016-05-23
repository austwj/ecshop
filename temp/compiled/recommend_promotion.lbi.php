<?php if ($this->_var['promotion_goods']): ?>
<div class="sale_box clearfix">
<h3><em>特价商品</em></h3>
 
      <div class="clearfix body">
        <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
        
        <div class="goodsItem"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
          <p class="name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
          <div class="info">
            <p class="price">
              <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
              <?php echo $this->_var['goods']['promote_price']; ?> 
              <?php else: ?> 
              <?php echo $this->_var['goods']['shop_price']; ?> 
              <?php endif; ?> 
            </p>
            <p class="market"><?php echo $this->_var['goods']['market_price']; ?></p>
            <a href="<?php echo $this->_var['goods']['url']; ?>" class="buy" target="_blank">立即购买</a>
          </div>
        </div>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
 </div>
 
<div class="blank" style="height:1px;"></div>
<?php endif; ?>
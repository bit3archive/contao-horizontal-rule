<hr<?php echo $this->cssID ?> class="<?php echo $this->class ?>"/>
<?php if (strlen($this->anchor)): ?><div class="<?php echo $this->class ?>"><a title="<?php echo $this->anchorTitle; ?>" href="{{env::request}}#<?php echo $this->anchor ?>"><?php echo $this->anchorTitle; ?></a></div><?php endif; ?>

<div class="panel-display clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="panel-panel">
    <div class="inside"><?php print $content['top']; ?></div>
  </div>

  <div class="panel-panel">
    <div class="inside"><?php print $content['center']; ?></div>
  </div>

  <div class="panel-panel">
    <div class="inside"><?php print $content['bottom']; ?></div>
  </div>
</div>

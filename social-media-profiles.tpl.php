<?php if($profiles): ?>
  <ul>
    <?php foreach($profiles as $profile): ?>
      <li>
        <a href="<?php print $profile->url; ?>" title="<?php print $profile->label; ?>">
          <i class="fa <?php print $profile->fa_icon; ?>"></i>
          <span class="label"><?php print $profile->label; ?></span>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
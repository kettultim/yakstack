
<?php
          $args = array(
            'sort_order' => 'ASC',
            'sort_column' => 'menu_order', //post_title
            'hierarchical' => 1,
            'exclude' => '',
            'child_of' => 48,
            'parent' => -1,
            'exclude_tree' => '',
            'number' => '10',
            'offset' => 0,
            'post_type' => 'page',
            'post_status' => 'publish'
          );
          $pages = get_pages($args);
          //start loop
          foreach ($pages as $page_data) {
              $content = apply_filters('the_content', $page_data->post_content);
              $title = $page_data->post_title;
              $slug = $page_data->post_name;
          ?>
          <div class='<?php echo "$slug" ?>'>
              <div class="pagewrap">
                <a name='<?php echo "$slug" ?>'></a>
                <h2><?php echo "$title" ?></h2>
                <?php echo "$content" ?>
              </div>
          </div>
<?php } ?>
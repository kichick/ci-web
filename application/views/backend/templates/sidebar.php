<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
                      FROM `user_menu` JOIN `user_access_menu`
                      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                      WHERE `user_access_menu`.`role_id` = $role_id
                      ORDER BY `user_access_menu`.`menu_id` 
                      ASC
                      ";
        $menu = $this->db->query($queryMenu)->result_array();
      ?>
      <!-- LOOPING -->
      <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
          <?= $m['menu']; ?>
        </div>
      <!-- sub menu-->
                    
      <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                        FROM  `user_sub_menu`
                        WHERE `menu_id` = $menuId
                          AND `is_active`= 1;
                      ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
      ?>
      <?php foreach ($subMenu as $sm) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url($sm['url']); ?>">
            <i class="<?= $sm['icon']; ?>"></i>
            <span><?= $sm['title']; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
      <?php endforeach; ?>
    </div>
   </div>        
  </div>
</div>
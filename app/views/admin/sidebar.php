<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="<?php echo ($navigation == 'dashboard') ? 'active' : 'not_active'?>">
                      <a class="" href="<?=base_url('admin/')?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Inventory</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($navigation == 'inventory') ? 'active' : 'not_active'?>"><a class="" href="<?=base_url('admin/admin_inventory/')?>">View Inventory</a></li>   

                          <li class="<?php echo ($navigation == 'add_item') ? 'active' : 'not_active'?>"><a class="" href="<?=base_url('admin/admin_inventory/create')?>">Add to Inventory</a></li>
                      </ul>
                  </li>       
                  
                  <li class="<?php echo ($navigation == 'quotations') ? 'active' : 'not_active'?>">
                      <a class="" href="<?=base_url('admin/admin_quotations/')?>">
                          <i class="fa fa-list-alt"></i>
                          <span>Quotes</span>
                      </a>
                  </li>
                                               
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-envelope"></i>
                          <span>Mail</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="http://portal.office.com" target="_blank">Inbox</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-cog"></i>
                          <span>Settings</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li class="<?php echo ($navigation == 'profile') ? 'active' : 'not_active'?>"><a class="" href="<?=base_url('admin/admin_profile/')?>">Profile</a></li>

                          <li class="<?php echo ($navigation == 'manage_inventory') ? 'active' : 'not_active'?>"><a class="" href="<?=base_url('admin/admin_settings/')?>"><span>Manage Administrators</span></a></li>

                          <li class="<?php echo ($navigation == 'manage_admin_groups') ? 'active' : 'not_active'?>"><a class="" href="<?=base_url('admin/admin_settings/')?>">Manage Admin Groups</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-desktop"></i>
                          <span>System</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="<?=base_url('admin/admin_settings/')?>">Backup</a></li>
                          <li><a class="" href="<?=base_url('admin/logout/')?>"><span>Logout</span></a></li>
                                                   
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
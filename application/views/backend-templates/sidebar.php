
          <div class="main-sidebar sidebar-style-2">
          <aside id="sidebar-wrapper">
                    
                    <div class="sidebar-brand">
                    <a href="<?php echo base_url('admin/dashboard') ?>">NF Rentcar</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                    <a href="<?php echo base_url('admin/dashboard') ?>">NFR</a>
                    </div>
                    <ul class="sidebar-menu">
                    
                    <li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                    <?php if($this->session->userdata('ROLE') == 'administrator'){ ?> 
                    <li><a class="nav-link" href="<?php echo base_url('admin/data_mobil'); ?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>
                    <?php  }?>
                    <?php  if($this->session->userdata('ROLE') == 'administrator'){ ?> 
                    <li><a class="nav-link" href="<?php echo base_url('admin/data_sewa'); ?>"><i class="fas fa-truck"></i> <span>Data sewa</span></a></li>
                    <?php  }?>

                    
                    <li><a class="nav-link" href="<?php echo base_url('admin/data_merk'); ?>"><i class="fas fa-receipt"></i> <span>Daftar Merk Mobil</span></a></li>
                    <li><a class="nav-link" href="<?php echo base_url('admin/jenis_perawatan'); ?>"><i class="fas fa-book"></i> <span>Referensi Perawatan</span></a></li>
                    <?php //}?>
                    <?php if($this->session->userdata('ROLE') == 'administrator'){?> 
                    <li><a class="nav-link" href="<?php echo base_url('admin/data_perawatan') ?>"><i class="fas fa-clipboard"></i> <span>Data Perawatan</span></a></li>
                    <li><a class="nav-link" href="<?php echo base_url('admin/data_users') ?>"><i class="fas fa-user"></i> <span>Data Users</span></a></li>
                    <?php
                    }
                    ?>
                    </ul>

          </aside>
          </div>
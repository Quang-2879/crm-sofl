
<!-- sidebar -->

<nav id="sidebar">
    <div id="dismiss">
        <i class="glyphicon glyphicon-arrow-left"></i>
    </div>

	<div class="sidebar-header">
		<h3>Menu :))</h3>
	</div>

    <ul class="list-unstyled components">
        

        <li>
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>public/images/new.png"> 
                <span> Danh sách contact mới </span>
            </a>
        </li>
        <li>
            <a data-filter=".97" href="<?php echo base_url('quan-ly/xem-tat-ca-contact.html'); ?>">
                <img src="<?php echo base_url(); ?>public/images/view-all.png"> 
                <span> Danh sách toàn bộ contact </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('quan-ly/them-contact.html'); ?>">
                <img src="<?php echo base_url(); ?>public/images/add-contact.png"> 
                <span> Thêm mới contact </span>
            </a>
        </li>
    
        <li>
            <a href="<?php echo base_url('quan-ly/xem-bao-cao-tu-van-tuyen-sinh.html'); ?>">
                <img src="<?php echo base_url(); ?>public/images/tvts.png"> 
                <span> Xem báo cáo TVTS </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('quan-ly/xem-bao-cao-doanh-thu.html'); ?>">
                <img src="<?php echo base_url(); ?>public/images/dollar.png"> 
                <span> Xem báo cáo doanh thu  </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('home/logout'); ?>">
                <img src="<?php echo base_url(); ?>public/images/logout.png"> 
                <span> Đăng xuất  </span>
            </a>
        </li>

    </ul>

</nav>


<nav id="sidebar">
    <div id="dismiss">
        <i class="glyphicon glyphicon-arrow-left"></i>
    </div>

	<div class="sidebar-header">
		<h3>Menu :))</h3>
		<?php if ($this->agent->mobile) { ?>
			<a href="javascript:;" class="user-profile" style="font-size: 16px; color: #f0f0f0 !important;">

				<img src="<?php echo base_url(); ?>style/img/logo.png" alt=""> <span> <?php echo $this->session->userdata('name'); ?> </span>

			</a>
		<?php } ?>
	</div>

    <ul class="list-unstyled components">
        
<!--        <li>-->
<!---->
<!--            <a href="--><?php //echo base_url('giang-vien/danh-sach-da-dang-ky.html'); ?><!--">-->
<!---->
<!--                <img src="--><?php //echo base_url(); ?><!--public/images/add-contact.png"> -->
<!---->
<!--                <span> Danh sách đăng ký</span>-->
<!---->
<!--            </a>-->
<!---->
<!--        </li>-->
<!---->
<!--        <li>-->
<!---->
<!--            <a href="--><?php //echo base_url('giang-vien/doanh-thu-theo-khoa.html'); ?><!--">-->
<!---->
<!--                <img src="--><?php //echo base_url(); ?><!--public/images/dollar.png"> -->
<!---->
<!--                <span> Doanh thu theo khóa</span>-->
<!---->
<!--            </a>-->
<!---->
<!--        </li>-->
<!---->
<!--        <li>-->
<!---->
<!--            <a href="--><?php //echo base_url('giang-vien/tong-doanh-thu-theo-thang.html'); ?><!--">-->
<!---->
<!--                <img src="--><?php //echo base_url(); ?><!--public/images/view-general-report.png"> -->
<!---->
<!--                <span> Xem báo cáo doanh thu  </span>-->
<!---->
<!--            </a>-->
<!---->
<!--        </li>-->

        <li>

            <a href="<?php echo base_url('home/logout'); ?>">

                <img src="<?php echo base_url(); ?>public/images/logout.png"> 

                <span> Đăng xuất  </span>

            </a>

        </li>

    </ul>

</nav>

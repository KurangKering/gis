
<!-- Footer Starts -->
<footer class="admin-footer">
	<div class="container-fluid">
		<ul class="list-unstyled list-inline">
			<li>
				<span class="pmd-card-subtitle-text">Sistem Informasi Geografis &copy; <span class="auto-update-year"></span>. All Rights Reserved.</span>
				<h3 class="pmd-card-subtitle-text">Ilham Rahmadhani</h3>
			</li>
			
		</ul>
	</div>
</footer>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<script src="<?php echo base_url('template/') ?>assets/js/jquery-1.12.2.min.js"></script>
<script src="<?php echo base_url('template/') ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('template/') ?>assets/js/propeller.min.js"></script>
<script>
	$("a").addClass('pmd-ripple-effect');

	
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
		$(".auto-update-year").html(new Date().getFullYear());
	});
</script> 
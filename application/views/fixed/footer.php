</div>
</div>
<div id="FileViewermyModal" class="FileViewer">

        <!-- The Close Button -->
        <span class="FileViewerClose">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="FileViewer-content" id="imageToView" class="img-responsive"
            style="max-width: 800px; max-height:800px">
        <iframe _ngcontent-c9="" height="60%" width="60%" style="margin: auto" id="FileViewerIframe"
            style='display:none'>
        </iframe>
        <!-- Modal Caption (Image Text) -->

 </div>     
<!-- BEGIN VENDOR JS-->
<script type="text/javascript">
    $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        format: '<?php echo $this->config->item('dformat2'); ?>'
    });
    $('[data-toggle="datepicker"]').datepicker('setDate', '<?php echo dateformat(date('Y-m-d')); ?>');

    $('#sdate').datepicker({autoHide: true, format: '<?php echo $this->config->item('dformat2'); ?>'});
    $('#sdate').datepicker('setDate', '<?php echo dateformat(date('Y-m-d', strtotime('-30 days', strtotime(date('Y-m-d'))))); ?>');
    $('.date30').datepicker({autoHide: true, format: '<?php echo $this->config->item('dformat2'); ?>'});
    $('.date30').datepicker('setDate', '<?php echo dateformat(date('Y-m-d', strtotime('-30 days', strtotime(date('Y-m-d'))))); ?>');


</script>
<script src="<?= assets_url() ?>app-assets/vendors/js/extensions/unslider-min.js"></script>
<script src="<?= assets_url() ?>app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
<script src="<?= assets_url() ?>app-assets/js/core/app-menu.js"></script>
<script src="<?= assets_url() ?>app-assets/js/core/app.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
<script src="<?php echo assets_url(); ?>assets/myjs/jquery-ui.js"></script>
<script src="<?php echo assets_url(); ?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>

<script type="text/javascript">var dtformat = $('#hdata').attr('data-df');
    var currency = $('#hdata').attr('data-curr');
    ;</script>
<script src="<?php echo assets_url('assets/myjs/custom.js') . APPVER; ?>"></script>
<script src="<?php echo assets_url('assets/myjs/basic.js') . APPVER; ?>"></script>
<script src="<?php echo assets_url('assets/myjs/control.js') . APPVER; ?>"></script>

<script type="text/javascript">
    $.ajax({

        url: baseurl + 'manager/pendingtasks',
        dataType: 'json',
        success: function (data) {
            $('#tasklist').html(data.tasks);
            $('#taskcount').html(data.tcount);

        },
        error: function (data) {
            $('#response').html('Error')
        }

    });

    $("body").on('click','img',function(){
	
	const modal = document.getElementById('FileViewermyModal') ;

    const modalImg = document.getElementById('imageToView');
    const modalIFrame = document.getElementById(
      'FileViewerIframe'
    );

    modal.style.display = 'block';
    modalIFrame.style.display = 'none';
    modalImg.style.display = 'block';
    modalImg.setAttribute('src', $(this).attr('src'));

    const span = document.getElementsByClassName(
      'FileViewerClose'
    )[0] ;

    span.onclick = function() {
      modal.style.display = 'none';
    };
    modal.onclick = function() {
      modal.style.display = 'none';
    };
    modalImg.onclick = function(event) {
      event.stopPropagation();
    };
	
	})
	
</script>


</body>
</html>

<!-- Modal -->
<div class="modal fade" id="modal-video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0" style="background-color: #0000;">
        <div class="">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:5rem">&times;</span>
            </button>
        </div>
        <div class="">
            <div class="embed-responsive embed-responsive-16by9 mb-3" style="border-width: 4px; margin-top:5%; border-radius: 5px;">
            
            <?php if ($pais=='ecuador'){?>
                <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://youtube.com/embed/bOVpL6pNVbo?autoplay=1&controls=1&mute=1"></iframe>
            <?php }?>
            
            <?php if ($pais=='colombia'){?>
                <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://youtube.com/embed/ojIFRDZjaIE?autoplay=1&controls=1&mute=1"></iframe>
            <?php }?>
            
            <?php if ($pais=='peru'){?>
                <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://youtube.com/embed/5nSTujtSxRM?autoplay=1&controls=1&mute=1"></iframe>
            <?php }?>
            
            </div>
        </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        $('#main-container').stop().animate({left: "250px"}, 200);
        $('#left-container').stop().animate({left: "0px"}, 200);
        $('#main-container').click(function() {
            $('#main-container').stop().animate({left: "0px"}, 200);
            $('#left-container').stop().animate({left: "-250px"}, 200);
            $('#right-container').stop().animate({right: "-250px"}, 200);
        });
    });
</script>

<?php
$this->render('header');
echo $this->title;
$this->render('footer');

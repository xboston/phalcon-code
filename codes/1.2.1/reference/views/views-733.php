<script type="text/javascript">

$.ajax({
    url: "<?php echo $this->url->get("cities/get") ?>"
})
.done(function() {
    alert("Done!");
});

</script>


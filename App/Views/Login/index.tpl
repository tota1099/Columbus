{include file="../topo2.tpl"}
<div id="elemento">
</div>
<script>

$.ajax({
    url: '{$smarty.const.__SYSTEM_URL}{$className}/{$methodName}',
    success: function (response) {
        $('#elemento').html(response);
    },
    error: function (jqXHR, exception) {
        alert('Algum erro aconteceu!');
    }
});

</script>
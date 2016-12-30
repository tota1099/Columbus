{include file="../topo.tpl"}
{include file="../menu.tpl"}

<main>
    <div id="systemContentDiv">
    </div>
</main>
<script>

$.ajax({
    url: '{$smarty.const.__SYSTEM_URL}{$className}/{$methodName}',
    success: function (response) {
        $('#systemContentDiv').html(response);
    },
    error: function (jqXHR, exception) {
        alert('Algum erro aconteceu!');
    }
});

</script>
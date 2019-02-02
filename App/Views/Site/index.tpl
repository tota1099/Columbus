<body>

{include file="../top.tpl"}

    <main>
        <div id="systemContentDiv">
        </div>
    </main>

{include file="../footer.tpl"}

</body>


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
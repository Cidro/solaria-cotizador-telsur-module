<script>
    var contents = <?=json_encode([
        'config' => $config->toArray()
    ]);?>;
</script>
<div class="row" ng-controller="CotizadorTelsurModuleController" ng-init="init()">
    <pre>{{ config | json }}</pre>
</div>
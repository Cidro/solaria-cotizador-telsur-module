<?php
namespace Asimov\Solaria\Modules\CotizadorTelsur;

use Solaria\Modules\SolariaModule;

class CotizadorTelsur implements SolariaModule {

    protected $name = 'CotizadorTelsur';

    protected $menu_name = 'Cotizador Telsur';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/cotizador-telsur');
    }

    public function getBackendStyles() {
        return [asset('modules/cotizador-telsur/css/cotizador-telsur-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/cotizador-telsur/js/cotizador-telsur-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        return 'cotizador-telsur';
    }
}
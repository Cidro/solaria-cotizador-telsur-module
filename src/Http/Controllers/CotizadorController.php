<?php

namespace Asimov\Solaria\Modules\CotizadorTelsur\Http\Controllers;

use Illuminate\Http\Request;
use Solaria\Http\Controllers\Backend\BackendController;
use Asimov\Solaria\Modules\CotizadorTelsur\Models\Config;

class CotizadorController extends BackendController {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){
        $this->authorize('module_cotizador_telsur_manage_config');

        view()->share([
            'config' => Config::firstOrNew(['site_id' => $this->site->id])
        ]);

        $data['content'] = view('modulecotizadortelsur::backend.index');
        return view($this->layout, $data);
    }

}
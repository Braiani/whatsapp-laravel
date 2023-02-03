<?php

namespace Brtechsistemas\Whatsapp\Controllers;

use Brtechsistemas\Whatsapp\WhatsApp;
use Illuminate\Http\Request;

class InstanceController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function init(WhatsApp $whatsApp)
    {
        return $whatsApp->init(env('WHATSAPP_TOKEN'));
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function generateQR()
    {
        $qrcode = 'Teste';

        return view('whatsapp::index', [
            'qrcode' => $qrcode
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function info()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function listAll()
    {

    }

    /**
     * Display a listing of the resource.
     *
     */
    public function restoreAll()
    {

    }
}

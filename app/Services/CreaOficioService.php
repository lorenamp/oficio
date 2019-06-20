<?php

namespace App\Services;

class CreateOficioServices
{
    private $oficio;

    function __construct()
    {
        $this->app = new App();
        $this->oficio = new TicketRepositorie($this->app);
    }

    public function create(Request $request)
    {
        DB::beginTransaction();
        $oficio = $this->oficio->create(array(
            'area' => $area,
            'descripcion'=>$descripcion,
            'fecha_registro' => date('Y-m-d H:i:s'),
    }
}






}




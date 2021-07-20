<?php


namespace App\Service\Operacional;

use App\Repository\VitimologiaRepository;

class DemandasRDOService
{

    /** @required */
    public VitimologiaRepository $vitimologiaRepository;

    public function getListaHistoricoAllEmpresas()
    {
        return $this->vitimologiaRepository->getListaHistoricoAllEmpresas();
    }

}
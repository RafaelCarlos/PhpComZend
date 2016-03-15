<?php

namespace Livraria\Model;

/**
 * Description of CategoriaService
 *
 * @author rafaelcarlos
 */
class CategoriaService {

    /**
     * @var Livraria\Model\CategoriaTable
     */
    protected $categoriaTable;

    function __construct(CategoriaTable $table) {
        $this->categoriaTable = $table;
    }

    //Retornando todos os registros do banco;
    private function fetchAll() {

        $resultSet = $this->categoriaTable->select();

        return $resultSet;
    }

}

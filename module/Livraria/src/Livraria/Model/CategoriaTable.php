<?php

/**
 * Description of CategoriaTable
 *
 * @author rafaelcarlos
 */

namespace Livraria\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;

class CategoriaTable extends AbstractTableGateway {

    //Sentando nome da tabela do banco
    protected $table = "categorias";

    function __construct(Adapter $adapter) {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Categoria());
        $this->initialize();
    }

}

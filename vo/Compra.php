<?php

class Compra {
    private $id_compra;
    private $forma_pagamento;
    private $data;
    private $id;
    private $id_cliente;
    
    function getId_compra() {
        return $this->id_compra;
    }

    function getForma_pagamento() {
        return $this->forma_pagamento;
    }

    function getData() {
        return $this->data;
    }

    function getId() {
        return $this->id;
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function setId_compra($id_compra) {
        $this->id_compra = $id_compra;
    }

    function setForma_pagamento($forma_pagamento) {
        $this->forma_pagamento = $forma_pagamento;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function toString(){
        return $id_compra."-".$id_cliente;
    }
}

<?php
/**
 * Created by CS-Generator.
 * User: pr0x
 */

class ImagenPortadaRepo extends ORMRepo {
    /**
     * @return self
     */
    public static function create() { return self::_create(__CLASS__);}

}

class ImagenPortadaModel extends ORMModel {
    const TABLE = "cu_neg_imagen_portada";

	/**
     * @var int
     */    
	 public $id;

    /**
     * @var int
     */
    public $active;

	/**
     * @var string
     */    
	 public $nombre;
	/**
     * @var string
     */    
	 public $foto;
	/**
     * @var string
     */    
	 public $textoCorto;
	public function toArray() {
		$arr = parent::toArray();
        return $arr;
		
    }

	public function __toString() {
        return $this->nombre;
    }

}

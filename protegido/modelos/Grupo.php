<?php
/**
 * Este modelo es la representación de la tabla tbl_grupos
 *
 * Atributos del modelo
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * 
 * Relaciones del modelo
 */
 class Grupo extends CModelo{
 
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "grupos";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_grupos
     * @return array
     */
    public function atributos() {
        return [
		'id' => ['pk'] , 
		'nombre', 
		'descripcion', 
        ];
    }
    
    /**
     * Esta función retorna las relaciones con otros modelos
     * @return array
     */
    protected function relaciones() {        
        return [
            # el formato es simple: 
            # tipo de relación | modelo con que se relaciona | campo clave foranea
                    ];
    }
    
    /**
     * Esta función retorna un alias dado a cada uno de los atributos del modelo
     * @return string
     */
    public function etiquetasAtributos() {
        return [
		'id' => 'Id', 
		'nombre' => 'Nombre', 
		'descripcion' => 'Descripcion', 
        ];
    }
    
    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return Grupo
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return Grupo
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return Grupo
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_grupos
     * @param string $clase
     * @return Grupo
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}

<?php
/**
 * Este modelo es la representación de la tabla tbl_enfermedades
 *
 * Atributos del modelo
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * 
 * Relaciones del modelo
 */
 class Enfermedad extends CModelo{
 
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "enfermedades";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_enfermedades
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
     * @return Enfermedad
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return Enfermedad
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return Enfermedad
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_enfermedades
     * @param string $clase
     * @return Enfermedad
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}

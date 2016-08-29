<?php
/**
 * Este modelo es la representación de la tabla tbl_nivel
 *
 * Atributos del modelo
 * @property int $id
 * @property string $nivel
 * @property string $descripcion
 * @property float $porcentaje
 * 
 * Relaciones del modelo
 */
 class Nivel extends CModelo{
 
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "nivel";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_nivel
     * @return array
     */
    public function atributos() {
        return [
		'id' => ['pk'] , 
		'nivel', 
		'descripcion', 
		'porcentaje', 
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
		'nivel' => 'Nivel', 
		'descripcion' => 'Descripcion', 
		'porcentaje' => 'Porcentaje', 
        ];
    }
    
    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return Nivel
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return Nivel
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return Nivel
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_nivel
     * @param string $clase
     * @return Nivel
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}

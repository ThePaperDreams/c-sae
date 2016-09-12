<?php
/**
 * Este modelo es la representación de la tabla tbl_accidentes_x_empleados
 *
 * Atributos del modelo
 * @property int $id
 * @property int $accidente_id
 * @property int $empleado_id
 * 
 * Relaciones del modelo
 */
 class AccidenteEmpleado extends CModelo{
 
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "accidentes_x_empleados";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_accidentes_x_empleados
     * @return array
     */
    public function atributos() {
        return [
		'id' => ['pk'] , 
		'accidente_id', 
		'empleado_id', 
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
            	'fkEmpleadoAccidente' => [self::PERTENECE_A, 'FkEmpleadoAccidente', 'empleado_id'],
	'fkExaAccidente' => [self::PERTENECE_A, 'FkExaAccidente', 'accidente_id'],
        ];
    }
    
    /**
     * Esta función retorna un alias dado a cada uno de los atributos del modelo
     * @return string
     */
    public function etiquetasAtributos() {
        return [
		'id' => 'Id', 
		'accidente_id' => 'Accidente Id', 
		'empleado_id' => 'Empleado Id', 
        ];
    }
    
    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return AccidenteEmpleado
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return AccidenteEmpleado
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return AccidenteEmpleado
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_accidentes_x_empleados
     * @param string $clase
     * @return AccidenteEmpleado
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}

<?php
/**
 * Este modelo es la representación de la tabla tbl_enfermedades_x_empleados
 *
 * Atributos del modelo
 * @property int $id
 * @property int $enfermedad_id
 * @property int $empleado_id
 * 
 * Relaciones del modelo
 */
 class EnfermedadEmpleado extends CModelo{
 
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "enfermedades_x_empleados";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_enfermedades_x_empleados
     * @return array
     */
    public function atributos() {
        return [
		'id' => ['pk'] , 
		'enfermedad_id', 
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
            	'fkEmpleadoEnfermedad' => [self::PERTENECE_A, 'FkEmpleadoEnfermedad', 'empleado_id'],
	'fkEnfermedad' => [self::PERTENECE_A, 'FkEnfermedad', 'enfermedad_id'],
        ];
    }
    
    /**
     * Esta función retorna un alias dado a cada uno de los atributos del modelo
     * @return string
     */
    public function etiquetasAtributos() {
        return [
		'id' => 'Id', 
		'enfermedad_id' => 'Enfermedad Id', 
		'empleado_id' => 'Empleado Id', 
        ];
    }
    
    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return EnfermedadEmpleado
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return EnfermedadEmpleado
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return EnfermedadEmpleado
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_enfermedades_x_empleados
     * @param string $clase
     * @return EnfermedadEmpleado
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}

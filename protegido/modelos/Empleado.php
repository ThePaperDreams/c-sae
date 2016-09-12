<?php
/**
 * Este modelo es la representación de la tabla tbl_empleados
 *
 * Atributos del modelo
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $cedula
 * @property int $cargo_id
 * @property string $direccion
 * @property int $profesion_id
 * @property double $salario
 * 
 * Relaciones del modelo
 * @property Cargo $Cargo
 * @property Profesion $Profesion
 */
 class Empleado extends CModelo{
 
    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "empleados";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_empleados
     * @return array
     */
    public function atributos() {
        return [
		'id' => ['pk'] , 
		'nombres', 
		'apellidos', 
		'cedula', 
		'cargo_id', 
		'direccion', 
		'profesion_id', 
		'salario', 
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
            'Cargo' => [self::PERTENECE_A, 'Cargo', 'cargo_id'],
            'Profesion' => [self::PERTENECE_A, 'Profesion', 'profesion_id'],
        ];
    }
    
    /**
     * Esta función retorna un alias dado a cada uno de los atributos del modelo
     * @return string
     */
    public function etiquetasAtributos() {
        return [
		'id' => 'Id', 
		'nombres' => 'Nombres', 
		'apellidos' => 'Apellidos', 
		'cedula' => 'Cedula', 
		'cargo_id' => 'Cargo Id', 
		'direccion' => 'Direccion', 
		'profesion_id' => 'Profesion Id', 
		'salario' => 'Salario', 
        ];
    }
    
    public function getNombreDePila(){
        return $this->nombres . ' ' . $this->apellidos;
    }
    
    public function getNivelRiesgo(){
        return $this->Cargo->Nivel->nivel;
    }
    
    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return Empleado
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }
    
    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return Empleado
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }
    
    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return Empleado
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    } 

    /**
     * Esta función retorna una instancia del modelo tbl_empleados
     * @param string $clase
     * @return Empleado
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }
}

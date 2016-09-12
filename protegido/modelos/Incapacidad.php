<?php

/**
 * Este modelo es la representación de la tabla tbl_incapacidades
 *
 * Atributos del modelo
 * @property int $id
 * @property int $empleado_id
 * @property int $dias
 * @property tinyint $tipo
 * @property int $enfermedad_id
 * @property int $accidente_id
 * @property double $total_empresa
 * @property double $total_eps
 * @property datetime $fecha
 * 
 * Relaciones del modelo
 * @property Empleado $Empleado
 * @property Accidente $Accidente
 * @property Enfermedad $Enfermedad
 * 
 */
class Incapacidad extends CModelo {

    /**
     * Esta función retorna el nombre de la tabla representada por el modelo
     * @return string
     */
    public function tabla() {
        return "incapacidades";
    }

    /**
     * Esta función retorna los atributos de la tabla tbl_incapacidades
     * @return array
     */
    public function atributos() {
        return [
            'id' => ['pk'],
            'empleado_id',
            'dias',
            'tipo',
            'enfermedad_id',
            'accidente_id',
            'total_empresa',
            'total_eps',
            'fecha',
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
            'Accidente' => [self::PERTENECE_A, 'Accidente', 'accidente_id'],
            'Empleado' => [self::PERTENECE_A, 'Empleado', 'empleado_id'],
            'Enfermedad' => [self::PERTENECE_A, 'Enfermedad', 'enfermedad_id'],
        ];
    }

    /**
     * Esta función retorna un alias dado a cada uno de los atributos del modelo
     * @return string
     */
    public function etiquetasAtributos() {
        return [
            'id' => 'Id',
            'empleado_id' => 'Empleado Id',
            'dias' => 'Dias',
            'tipo' => 'Tipo',
            'enfermedad_id' => 'Enfermedad Id',
            'accidente_id' => 'Accidente Id',
            'total_empresa' => 'Total Empresa',
            'total_eps' => 'Total Eps',
            'fecha' => 'Fecha',
            'descripcion' => 'Descripción',
        ];
    }
    
    public function getNombreAccidente(){
        return $this->Accidente !== null? $this->Accidente->nombre : null;
    }
    
    public function getNombreEnfermedad(){
        return $this->Enfermedad !== null? $this->Enfermedad->nombre : null;
    }
    
    public function getTxtTipo(){
        return $this->tipo == 0? 'Enfermedad' : 'Accidente';
    }

    /**
     * Esta función permite listar todos los registros
     * @param array $criterio
     * @return Incapacidad
     */
    public function listar($criterio = array()) {
        return parent::listar($criterio);
    }

    /**
     * Esta función permite obtener un registro por su primary key
     * @param int $pk
     * @return Incapacidad
     */
    public function porPk($pk) {
        return parent::porPk($pk);
    }

    /**
     * Esta función permite obtener el primer registro
     * @param array $criterio
     * @return Incapacidad
     */
    public function primer($criterio = array()) {
        return parent::primer($criterio);
    }

    /**
     * Esta función retorna una instancia del modelo tbl_incapacidades
     * @param string $clase
     * @return Incapacidad
     */
    public static function modelo($clase = __CLASS__) {
        return parent::modelo($clase);
    }

}

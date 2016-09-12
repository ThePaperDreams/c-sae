<?php
/**
 * Este es el controlador Incapacidad, desde aquí se gestionan
 * todas las actividades que tengan que ver con Incapacidad
 * @author Jorge Alejandro Quiroz Serna <alejo.jko@gmail.com>
 * @version 1.0.0
 */
class CtrlIncapacidad extends CControlador{
    
    /**
     * Esta función muestra el inicio y una tabla para listar los datos
     */
    public function accionInicio(){
        $modelos = Incapacidad::modelo()->listar();        
        $this->mostrarVista('inicio', ['modelos' => $modelos]);
    }
    
    /**
     * Esta función permite crear un nuevo registro
     */
    public function accionAgregar($id){
        $modelo = new Incapacidad();
        $modelo->empleado_id = $id;
        if(isset($this->_p['Incapacidades'])){
            $modelo->atributos = $this->_p['Incapacidades'];            
            $modelo->total_empresa = $this->_p['total_empresa'];
            $modelo->total_eps = $this->_p['total_eps'];
            
//            var_dump($_POST, $modelo);
//            Sis::fin();
            if($modelo->guardar()){
                # lógica para guardado exitoso
                $this->redireccionar('inicio');
            }
        }
        $this->mostrarVista('crear', $this->getOpciones($modelo));
    }
    /**
     * 
     * @param Incapacidad $modelo
     * @return type
     */
    public function getOpciones(&$modelo){
        $empleado = $modelo->Empleado->cedula . ' - ' . $modelo->Empleado->nombreDePila;
        $enfermedades = Enfermedad::modelo()->listar();
        $accidentes = Accidente::modelo()->listar();
        $nivel = $modelo->Empleado->nivelRiesgo;
        $porcentaje = doubleval($modelo->Empleado->Cargo->Nivel->porcentaje);
        $salario = doubleval($modelo->Empleado->salario);
        return [
            'empleado' => $empleado,
            'modelo' => $modelo,
            'enfermedades' => CHtml::modeloLista($enfermedades, "id", "nombre"),
            'accidentes' => CHtml::modeloLista($accidentes, "id", "nombre"),
            'riesgo' => $nivel,
            'porcentaje' => $porcentaje,
            'salario' => $salario,
        ];
    }
    
    /**
     * Esta función permite editar un registro existente
     * @param int $pk
     */
    public function accionEditar($pk){
        $modelo = $this->cargarModelo($pk);
        if(isset($this->_p['Incapacidades'])){
            $modelo->atributos = $this->_p['Incapacidades'];
            if($modelo->guardar()){
                # lógica para guardado exitoso
                $this->redireccionar('inicio');
            }
        }
        $this->mostrarVista('editar', $this->getOpciones($modelo));
    }
    
    /**
     * Esta función permite ver detalladamente un registro existente
     * @param int $pk
     */
    public function accionVer($pk){
        $modelo = $this->cargarModelo($pk);
        $this->mostrarVista('ver', ['modelo' => $modelo]);
    }
    
    /**
     * Esta función permite eliminar un registro existente
     * @param int $pk
     */
    public function accionEliminar($pk){
        $modelo = $this->cargarModelo($pk);
        if($modelo->eliminar()){
            # lógica para borrado exitoso
        } else {
            # lógica para error al borrar
        }
        $this->redireccionar('inicio');
    }
    
    /**
     * Esta función permite cargar un modelo usando su primary key
     * @param int $pk
     * @return Incapacidad
     */
    private function cargarModelo($pk){
        return Incapacidad::modelo()->porPk($pk);
    }
}

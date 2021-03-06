<?php
/**
 * Esta clase representa al sistema que contiene la aplicación, ella inicializa
 * toda la lógica básica que necesita una aplicación
 * 
 * @package sistema
 * @author Jorge Alejandro Quiroz Serna (jako) <alejo.jko@gmail.com>
 * @version 2.0.0
 * @copyright (c) 2015, jakop
 */
final class Sis {
    /**
     * array que contiene todos los alias registrados en el sistema
     * @var array 
     */
    private static $alias;
    /**
     * Instancia de la aplicación
     * @var CAplicacionWeb 
     */
    private static $apliacion = null;
    /**
     * Ubicación en el servidor del sistema
     * @var string 
     */
    private static $rutaSistema;
    /**
     * Versión actual del framework
     * @var string 
     */
    private static $version = '2.0.0';
    
    private function __construct() {}
    
    /**
     * Esta función inicializa la apliación y retorna una instancia de la aplicación, la única instancia
     * que se ejecuta en el sistema
     * 
     * @param string $rutaConfiguracion Ruta de donde se cargarán las configuraciones de la aplicación
     * @return \CAplicacionWeb
     */
    public static function crearAplicacion($rutaConfiguracion){        
        self::$rutaSistema = realpath(__DIR__);
        self::cargarGlobales();
        self::cargarAlias();
        self::importar('!sistema.web.CAplicacionWeb');        
        self::$apliacion = CAplicacionWeb::getInstancia($rutaConfiguracion);
        self::$apliacion->inicializar();
        return self::$apliacion;
    } 
    
    /**
     * Esta función devuelve la única instancia de la aplicación en el sistema
     * @return CAplicacionWeb
     */
    public static function apl(){
        return self::$apliacion;
    }
    
    /**
     * Esta función es un alias de la función apl
     * @return CAplicacionWeb
     */
    public static function ap(){
        return self::$apliacion;
    }
    
    /**
     * Esta función carga el archivo de globales del sistema
     * @throws Exception Si no se existe la ruta de las globales
     */
    private static function cargarGlobales(){
        $rutaGlobales = realpath(self::$rutaSistema.'/utilidades/Globales.php');
        if(!file_exists($rutaGlobales)){
            throw new Exception('Error al intentar cargar las globales del sistema');
        }
        require_once $rutaGlobales;
    }
    
    /**
     * Esta función carga el archivo que contiene los alias del sistema y asigna 
     * los alias guardados allí a la variable alias del sistema
     * @throws Exception si no existe la ruta de alias del sistema
     */
    private static function cargarAlias(){
        $rutaAlias = realpath(self::$rutaSistema.'/utilidades/Alias.php');
        if(!file_exists($rutaAlias)){
            throw new Exception("Error al incluir los alias del sistema");
        }
        self::$alias = include $rutaAlias;
    }
    
    /**
     * Esta función retorna la ruta de un alias si este está definido en el array de alias
     * @param string $nombre
     * @return mixed string con la ruta del alias si lo encuentra, false si no lo encuentra
     */
    public static function getAlias($nombre){
        return isset(self::$alias[$nombre])? 
            self::$alias[$nombre] : false;
    }
    /**
     * Esta función retorna un array con los alias registrados en el sistema
     * @return array
     */
    public static function getAliasTodos(){
        return self::$alias;
    }
    /**
     * Esta función permite registrar nuevos alias en la aplicación
     * @param array $alias el formato del array debe ser array('alias'=>'ruta', 'alias2'=>'ruta')
     */
    public static function setAlias($alias = []){
        foreach ($alias AS $key=>$value){
            self::$alias[$key] = $value;
        }
    }
    /**
     * Esta función retorna la ubicación del sistema
     * @return string
     */
    public static function getUbicacion(){
        return self::$rutaSistema;
    }
    /**
     * Esta función convierte una ruta tipo java en una ruta real del servidor
     * @param string $ruta la ruta debe tener formato java, como sistema.web.clase puede valerse de alias
     *                      para construir la ruta que desea
     *                      <ul>
     *                          <li>sistema: ruta base del sistema</li>
     *                          <li>web: ruta a la carpeta web</li>
     *                          <li>base: ruta a la carpeta base</li>
     *                          <li>aplicacion: ruta base a la aplicación</li>
     *                      </ul>
     * @return string
     */
    public static function resolverRuta($ruta, $conClase = false){
        $partes = explode('.',$ruta);
        # si el resultado de explotar la ruta es mayor que uno el nombre de la 
        # clase se supone debe ser la última posición, el resto es ruta
        if(count($partes) > 1){ $nombreClase = $partes[count($partes) - 1]; } 
        else { $nombreClase = ''; }
        
        if(isset(self::$alias[$partes[0]])){
            $rutaReal = self::$alias[$partes[0]];
            unset($partes[0]);
        } else {
            $rutaReal = $partes[0];
        }
        
        # construimos la ruta
        for($i = 1; $i < count($partes); $i ++){ $rutaReal .= DS.$partes[$i]; }
        
        return $rutaReal.($nombreClase !== ''? DS.$nombreClase : '').($conClase? '.php' : '');
    }
    
    /**
     * Esta función valida si una ruta existe
     * @param string $ruta
     * @param boolean $conAlias
     * @return boolean
     */
    public static function existeRuta($ruta, $conAlias = true) {
        return $conAlias? file_exists(self::resolverRuta($ruta)) : 
                file_exists($ruta);
    }
    
    /**
     * Esta función permite crear directorios dentro de la aplicación
     * @param string $ruta
     * @throws CExSistema si se trata de crear directorios en el core
     * @return string retorna la ruta ingresada
     */
    public static function crearCarpeta($ruta){
        # explotamos la ruta recibida, utilizando el caracter punto com oreferencia
        $partes = explode('.', $ruta);
        if($partes[0] == "!sistema"){
            throw new CExSistema("No puedes crear directorios en el core");
        }
        # obtenemos la primera parte de la ruta, que debe contener el alias
        $rutaRaiz = self::resolverRuta($partes[0]);
        if(!file_exists($rutaRaiz)){
            throw new CExSistema("No existe el alias especificado");
        }
        # removemos el inicio
        unset($partes[0]);
        # recorremos el resto de la cadena creando los directorios faltantes
        foreach($partes AS $dir){
            $rutaRaiz .= DS . $dir;
            if(!file_exists($rutaRaiz)){ mkdir($rutaRaiz); }
        }
        
        return $ruta;
    }
    
    /**
     * Esta función importa una clase o archivo
     * @param string $ruta
     * @param boolean $usandoAlias
     * @return boolean true si se importa el archivo, false si no
     */
    public static function importar($ruta, $usandoAlias = true){
        if($usandoAlias){
            $ruta = self::resolverRuta($ruta, true);
        }

        if(!file_exists($ruta)){
            return false;
        }
        
        return (include_once $ruta) === 1;
    }
    
    /**
     * Esta función finaliza la ejecución de todo el sistema
     * @param type $estado
     */
    public static function fin(){
        exit();
    }
    
    /**
     * Esta función retorna la versión actual del sistema
     * @return string
     */
    public static function v(){
        return self::$version;
    }    

    /**
     * Función magica para obtener el llamado a metodos estaticas del sistema
     * 
     * @param string $metodo
     * @param [] $argumentos
     * @return mixed
     */
    public static function __callStatic($metodo, $argumentos) {
        if(method_exists(self::$apliacion, $metodo)) {            
            return call_user_func_array([self::$apliacion, $metodo], $argumentos);
        } if(method_exists(self::$apliacion, 'get' . ucfirst($metodo))) {
            return call_user_func_array([self::$apliacion, 'get' . ucfirst($metodo)], $argumentos);
        }
    }
    
    /**
     * Accesos directos
     */
    
    /**
     * Este es un atajo para obtener el componente de recursos de la aplicación
     * @return CMRecursos
     */
    public static function Recursos(){
        return self::$apliacion->getRecursos();
    }
    
    /**
     * Esta función es un atajo para obtener la url de los recursos de la aplicación
     * @return string
     */
    public static function UrlRecursos(){
        return self::$apliacion->getRecursos()->getUrlRecursos();
    }
    
    /**
     * Este es un atajo para obtener el componente de sesion de la aplicación
     * @return CMSesion
     */
    public static function Sesion(){
        return self::$apliacion->getSesion();
    }
    
}

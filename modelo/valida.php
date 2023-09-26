<?php  
	/**
	 * 
	 */
	class valida
	{
		private $response = array();
		private $rutatemp = "temp/";
		public function __construct()
		{			
		}
		public function CreaRespuesta($codigo, $mensaje = "", $objeto = null){
			switch ($codigo) {
				case '0':
					$this->response["codigo_respuesta"] = 0;
					$this->response["mensaje"] = "Ok";
					$this->response["listaobjetos"] = $objeto;
					break;				
				case '-1':
					$this->response["codigo_respuesta"] = -1;
					$this->response["mensaje"] = $mensaje;
					break;
			}
		}

		public function ObtenerResponse(){
			//Aqui se retorna la respuesta
			$items = '[{
				"tipo": "carro",
				"tamanio": "Grande",
				"color": "Green"
				},
				{
				"tipo": "moto",
				"tamanio": "mediana",
				"color": "Blue"
				},
				{
				"tipo": "bicicleta",
				"tamanio": "chica",
				"color": "Green"
				},
				{
				"tipo": "avion",
				"tamanio": "grande",
				"color": "yellow"
				},
				{
				"tipo": "lancha",
				"tamanio": "grande",
				"color": "Red"
				},
				{
				"tipo": "moto",
				"tamanio": "mediano",
				"color": "Red"
				}]';
			return json_decode($items);
		}

		public function ExportarJson($nombreArchivo){			
			file_put_contents($this->rutatemp .$nombreArchivo, json_encode($this->response), FILE_APPEND | LOCK_EX);
		}
	}
?>
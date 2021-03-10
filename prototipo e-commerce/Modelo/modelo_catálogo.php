<?php

include_once "conexion.php";

class Productos extends Conexion
{
	private $pagina_actual;
	private $total_paginas;
	private $n_resultados;
	private $resultados_por_pagina;
	private $indice;

	private $error = false;

	function __construct($n_por_pagina)
	{
		parent::__construct(); //se ejecuta primero el constructor de la clase padre

		$this->resultados_por_pagina = $n_por_pagina;
		$this->indice = 0;
		$this->pagina_actual = 1;

		$this->calcularPaginasperro();
	}

	function calcularPaginasperro()
	{
		$resultado = $this->connection->query('SELECT * FROM PRODUCTO WHERE (Categoría_idCategoría = 1) OR (Categoría_idCategoría = 3) OR (Categoría_idCategoría = 5) OR (Categoría_idCategoría = 7)');
		$this->n_resultados = $resultado->num_rows;
		$this->total_paginas = $this->n_resultados / $this->resultados_por_pagina;

		if (isset($_GET['pagina']))
		{
			//validar que pagina es un numero
			if (is_numeric($_GET['pagina']))
			{
				if($_GET['pagina'] >= 1 AND $_GET['pagina'] <= $this->total_paginas)
				{
					$this->pagina_actual = $_GET['pagina'];
					$this->indice = ($this->pagina_actual - 1) * ($this->resultados_por_pagina);
				}else{
					echo "No existe esa página";
					$this->error = true;
				}
			}else{
				//confirmar error
				echo "Error al mostrar la página";
				$this->error = true;
			}
		}
	}

	function mostrarProductosperro()
	{
		if (!$this->error)
		{
			//continuar
			$consulta = $this->connection->query('SELECT * FROM PRODUCTO WHERE (Categoría_idCategoría = 1) OR (Categoría_idCategoría = 3) OR (Categoría_idCategoría = 5) OR (Categoría_idCategoría = 7) LIMIT '.$this->indice.', '.$this->resultados_por_pagina.'');

			foreach ($consulta as $producto) {
				include "../Vista/vista_catálogo.php";
			}
		}else{
			echo "error";
		}
	}

	function calcularPaginasgato()
	{
		$resultado = $this->connection->query('SELECT * FROM PRODUCTO WHERE (Categoría_idCategoría = 2) OR (Categoría_idCategoría = 4) OR (Categoría_idCategoría = 6) OR (Categoría_idCategoría = 8)');
		$this->n_resultados = $resultado->num_rows;
		$this->total_paginas = $this->n_resultados / $this->resultados_por_pagina;

		if (isset($_GET['pagina']))
		{
			//validar que pagina es un numero
			if (is_numeric($_GET['pagina']))
			{
				if($_GET['pagina'] >= 1 AND $_GET['pagina'] <= $this->total_paginas)
				{
					$this->pagina_actual = $_GET['pagina'];
					$this->indice = ($this->pagina_actual - 1) * ($this->resultados_por_pagina);
				}else{
					echo "No existe esa página";
					$this->error = true;
				}
			}else{
				//confirmar error
				echo "Error al mostrar la página";
				$this->error = true;
			}
		}
	}

	function mostrarProductosgato()
	{
		if (!$this->error)
		{
			//continuar
			$consulta = $this->connection->query('SELECT * FROM PRODUCTO WHERE (Categoría_idCategoría = 2) OR (Categoría_idCategoría = 4) OR (Categoría_idCategoría = 6) OR (Categoría_idCategoría = 8) LIMIT '.$this->indice.', '.$this->resultados_por_pagina.'');

			foreach ($consulta as $producto) {
				include "../Vista/vista_catálogo.php";
			}
		}else{
			echo "error";
		}
	}

	function mostrarPaginas()
	{
		echo "<ul>";

		for ($i=0; $i < $this->total_paginas; $i++) { 
			echo '<li><a href = "?pagina= ' . ($i + 1) . ' " > ' . ($i + 1) . '</a></li>';
		}

		echo "</ul>";
	}
}

?>
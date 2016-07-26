<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */




	private $idUsuario;
	private $usuario1;
	private $password1;


	public function registrarticket()
	{
		$titulo= $this->input->post('titulo');
		$descripcion= $this->input->post('descripcion');
		$fecha= $this->input->post('fecha');
		$prioridad= $this->input->post('prioridad');
		$estado= $this->input->post('estado');
		$ciudad= $this->input->post('ciudad');
		$status= $this->input->post('status');


		$this->load->model('tickets','ticket',TRUE);
		$data['query']=$this->ticket->agregarticket($titulo,$descripcion,$fecha,$prioridad,$estado,$ciudad,$status,1);
			if($data['query']==1)
        {
        ?><script>alert('registrado');</script><?   
         		$data['query2']=$this->ticket->detalleticket($titulo);
         		$this->load->view('header');
                $this->load->view('ticketregistrado',$data);
                $this->load->view('footer');
   	
		}
	}

	public function index()
	{	
	
		
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function agregar()
	{

		$this->load->view('add');
		$this->load->view('footer');
	}

	public function insertaruser()
	{
		$nombre= $this->input->post('nombre');
		$apellido= $this->input->post('apellido');
		$numempleado= $this->input->post('numempleado');
		$puesto= $this->input->post('puesto');
		$telefono= $this->input->post('telefono');
		$extension= $this->input->post('extension');
		$correo= $this->input->post('correo');
		$celular= $this->input->post('celular');
		$area= $this->input->post('area');
		$planta= $this->input->post('planta');
		$sucursal= $this->input->post('sucursal');
		$usuario= $this->input->post('usuario');
		$contrasenia= $this->input->post('contrasenia');
		$this->load->model('tickets','ticket',TRUE);
		$data['query']=$this->ticket->agregaruser($nombre,$apellido,$numempleado,$puesto,$telefono,$extension,$correo,$celular,$area,$planta,$sucursal,$usuario,$contrasenia);


		if($data['query']==1)
        {
               


		foreach ($data['query'] as $row)
		{
        $usuario1= $row->usuario;
        $password1=$row->contrasenia;
        $idUsuario=$row->id;
		}



                $this->load->view('header');
                $this->load->view('inicio',$data);
                $this->load->view('footer');

        }
        else{ 
                ?><script>alert('NO SE PUDO REGISTRAR');</script><?
                $this->load->view('add');
				$this->load->view('footer');
        }


	}
	public function respuesta()
	{
		$user= $this->input->post('ticket');
		$this->load->view('header');
		$this->load->view('respuesta');
		$this->load->view('footer');
	}


	public function login()
	{	
		$usuario1='';
        $password1='';
        $idUsuario='';
      	$nombre='';
		$user= $this->input->post('usuario');
		$pass= $this->input->post('contrasenia');
		$this->load->model('tickets','ticket',TRUE);
		$data['query']=$this->ticket->login($user,$pass);
	
		foreach ($data['query'] as $row)
		{
        $usuario1= $row->usuario;
        $password1=$row->contrasenia;
        $idUsuario=$row->id;
        $nombre =$row->administrador;
        break;
		}
		
		if($usuario1!=''and $password1!='' and $nombre=='admin')
		{
			
		$this->load->model('tickets','ticket',TRUE);
		$data['query']=$this->ticket->tickets();

		$this->load->view('header');
		$this->load->view('inicio2',$data);
		$this->load->view('footer');



		}

		if($usuario1!=''and $password1!='' and $nombre=='')
		{

		

		$this->load->view('header');
		$this->load->view('inicio',$data);
		$this->load->view('footer');


		}
		if($usuario1==''and $password1=='' )
		{
	
		?><script>alert('DATOS INCORRECTOS');</script><?
		$this->load->view('login');
		$this->load->view('footer');
		}

		

	}




	public function inicioviejo()
	{

		echo $usuario1;
		echo $password1;
		$this->load->model('tickets','ticket',TRUE);
		$data['query']=$this->ticket->login($usuario1,$password1);
		$usuario1='';
		$password1='';
		foreach ($data['query'] as $row)
		{
        $usuario1= $row->usuario;
        $password1=$row->contrasenia;
        $idUsuario=$row->contrasenia;
		}

		if($usuario1!=''and $password1!='')
		{

		

		$this->load->view('header');
		$this->load->view('inicio',$data);
		$this->load->view('footer');


		}else
		{
	
		?><script>alert('DATOS INCORRECTOS');</script><?
		$this->load->view('login');
		$this->load->view('footer');
		}






	}





public function buscatickett()
{
			$idTicket= $this->input->post('ticket');
			$this->load->model('tickets','ticket',TRUE);
		    $data['query2']=$this->ticket->buscaticket($idTicket);


		    $this->load->view('header');
            $this->load->view('ticketsini',$data);
            $this->load->view('footer');


}

public function vermas()
{
			$idTicket= $this->input->post('ticket');
			$this->load->model('tickets','ticket',TRUE);
		    $data['query2']=$this->ticket->buscaticket($idTicket);


		    $this->load->view('header');
            $this->load->view('ticketsini',$data);
            $this->load->view('footer');

}

	public function nuevoticket()
	{	
		$this->load->view('header');
		$this->load->view('nuevo');
		$this->load->view('footer');
	}

	public function buscarticket()
	{	
		$this->load->view('header');
		$this->load->view('rastreoticket');
		$this->load->view('footer');
	}


	public function historial()
	{	


		$this->load->model('tickets','ticket',TRUE);
		$data['query']=$this->ticket->tickets();

		$this->load->view('header');
		$this->load->view('historialticket',$data);
		$this->load->view('footer');
	}
}

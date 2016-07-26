<?

class Tickets extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function buscaticket($idTicket)
        {
        $sql = "SELECT * FROM ticket WHERE id ='".$idTicket."';"; 
                $query=$this->db->query($sql);
                return $query->result();

        }
        public function tickets()
        {

           $sql = "SELECT * FROM ticket";
                $query=$this->db->query($sql);
                return $query->result();

        }


        public function detalleticket($titulo)
        {
                $sql = "SELECT * FROM ticket WHERE titulo ='".$titulo."';"; 
                $query=$this->db->query($sql);
                return $query->result();
        }


        public function login($user,$login)
        {
                 
                $sql = "SELECT * FROM usuarios left join permisos on usuarios.id = idUsuario WHERE usuario ='".$user."' AND contrasenia = '".$login."';"; 
                $query=$this->db->query($sql);
                return $query->result();
        }

 public function agregarticket($titulo,$descripcion,$fecha,$prioridad,$estado,$ciudad,$status,$idUsuario)
        {
                  $data = array(
               
              'titulo' =>$titulo,
              'descripcion'=>$descripcion,
              'fecha'=>$fecha,
              'prioridad'=>$prioridad,
              'estado'=>$estado,
              'ciudad'=>$ciudad,
              'status'=>$status,
              'idUsuario'=>$idUsuario

                );

                   $query=$this->db->insert('ticket', $data); 
                    return $query;
        }


         public function agregaruser($nombre,$apellido,$numempleado,$puesto,$telefono,$extension,$correo,$celular,$area,$planta,$sucursal,$usuario,$contrasenia)
        {
                  $data = array(
               
              'nombre' =>$nombre,
              'apellido' => $apellido,
              'numEmpleado' => $numempleado,
              'puesto' => $puesto,
              'telefono' => $telefono,
              'extension' => $extension,
              'correo' => $correo,
              'celular' => $celular,
              'area' => $area,
              'planta' => $planta,
              'sucursal' => $sucursal,
              'usuario' => $usuario,
              'contrasenia' => $contrasenia


                );

                   $query=$this->db->insert('usuarios', $data); 
                    return $query;

        }


        // public function get_comercio()
        // {
        //          $query = $this->db->query('select * from establecimientos inner join est_cat where status=1 and cod_cat=1;');
        //         return $query->result();
        // }

        // public function update_entry()
        // {
        //         $this->title    = $_POST['title'];
        //         $this->content  = $_POST['content'];
        //         $this->date     = time();

        //         $this->db->update('entries', $this, array('id' => $_POST['id']));
        // }
        

        //       $sql = "select * from categorias where nombre_categoria=? limit 1";
        //       $query=$this->db->query($sql, array($categoria));
        //       $categoria=$query->result();
        //       foreach ($categoria as $key => $cat) {
        //       $id_categoriaa=$cat->id_categoria;
        //       }

            

        //     $data = array(
        //      'cod_establecimiento' => $id_establecimientoo,
        //       'cod_categoria' => $id_categoriaa);

                  
        //      $query=$this->db->insert('est_cat', $data); 
        //      return $query;

        // }

       
      
        

}
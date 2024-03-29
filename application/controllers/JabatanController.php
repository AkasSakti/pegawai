<?php
use \application\controllers\MainController;
class JabatanController extends MainController{
   function __construct(){
      parent::__construct();
      $this->model('jabatan');
   }

   public function index(){
      $data = $this->jabatan->select()->orderBy('id_jabatan', 'DESC')->get();
      $this->template('jabatan/index', $data);
   }
   
   public function add(){
      $this->template('jabatan/add');
   }     

   public function edit($id){
      $data = $this->jabatan->select()->where(['id_jabatan','=', $id])->get();
      $this->template('jabatan/edit', $data);
   }
   
   public function insert(){
      $jabatan = $this->jabatan->data([
         'nama_jabatan' => $_POST['nama']
      ]);  
      $jabatan->insert();
      $this->redirect('jabatan/index');
   }

   public function update(){
      $jabatan = $this->jabatan->find($_POST['id']);
      $jabatan->data([
         'nama_jabatan' => $_POST['nama']
      ]);  
      $jabatan->update();
      $this->redirect('jabatan/index');
   }
    
   public function delete($id){
      $this->jabatan->find($id)->delete();      
      $this->redirect('jabatan/index');
   }
}
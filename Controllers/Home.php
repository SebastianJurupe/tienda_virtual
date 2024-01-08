<?php
class Home extends Controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function home()
  {
    $data['page_id'] = 1;
    $data['tag_page'] = "Home";
    $data['page_title'] = "Pagina Principal";
    $data['page_name'] = "home";
    $data['page_content'] = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos asperiores vero vitae qui cupiditate reiciendis, ipsum in quasi id sed, impedit commodi beatae aspernatur ea veniam odio eaque temporibus magni!";
    $this->views->getView($this, "home", $data);
  }

  public function insertar(){
    $data = $this->model->setUser("Sebastian",20);
    print_r($data);
  }

  public function verUsuario($id){
    $data = $this->model->getUser($id);
    print_r($data);
  }

  public function actualizar(){
    $data = $this->model->updateUser(1,"Jose",30);
    print_r($data);
  }

  public function verUsuarios(){
    $data = $this->model->getUsers();
    print_r($data);
  }

  public function delete($id){
    $data = $this->model->deleteUser($id);
    print_r($data);
  }
}

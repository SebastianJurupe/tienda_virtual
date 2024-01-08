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
    $data['page_tag'] = "Home";
    $data['page_title'] = "Pagina Principal";
    $data['page_name'] = "home";
    $data['page_content'] = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos asperiores vero vitae qui cupiditate reiciendis, ipsum in quasi id sed, impedit commodi beatae aspernatur ea veniam odio eaque temporibus magni!";
    $this->views->getView($this, "home", $data);
  }
}

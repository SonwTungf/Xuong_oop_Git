<?php

namespace Pc\XUONG_OOP\Controllers\Admin;

use Pc\XUONG_OOP\Commons\Controller;
use Pc\XUONG_OOP\Commons\Helper;
// use Pc\XUONG_OOP\Models\User;
use Pc\XUONG_OOP\Interfaces\InterfaceControllers;
use Rakit\Validation\Rules\Url;

class ProductController extends Controller implements InterfaceControllers
{
    // private User $user;
    private string $folder = 'products.';
    public function __construct()
    {
        // $this->user = new User();
    }

    public function index()
    {
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }


    public function create()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
    public function store()
    {
        echo __CLASS__ . '@' . __FUNCTION__ . '-ID=' ;
    }
    public function show($id)
    {

        echo __CLASS__ . '@' . __FUNCTION__ . '-ID=' . $id;
    }

    public function edit($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . '-ID=' . $id;
    }
    public function update($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . '-ID=' . $id;
    }
    public function delete($id)
    {
        // $this->user->delete($id);

        header('location:' . url('admin/products'));
        exit();
    }
}

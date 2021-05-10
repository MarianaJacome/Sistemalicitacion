<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'userModel'=>'CoUsuarios',
                    'fields' => [
                        'username' => 'login',
                        'password' => 'password'
                    ]
                ]
            ], 
            'loginAction' => [
                'controller' => 'CoUsuarios',
                'action' => 'login'
            ],
           
             //use isAuthorized in Controllers
            'authorize' => ['Controller'],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer(),

            'storage' => 'Session'
        ]);



        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function isAuthorized($user)
    {
        if(!$this->request->getSession()->check('permisos'))
        {
            $this->_getPermisosBD();
        }
        $permisos = $this->request->getSession()->read('permisos');
        $extras =
                    [

                        ['CoPermisos'=>['controller'=>'CoUsuarios','action'=>'logout']],
                    ];

        $permisos = array_merge($extras, $permisos);

        //pr($permisos);exit;
        foreach($permisos as $permiso)
        {
            if($permiso['CoPermisos']['controller'] == '*' && $permiso['CoPermisos']['action'] == '*')
            {
                return true;
            }
            if($permiso['CoPermisos']['controller'] == $this->request->getParam('controller') && $permiso['CoPermisos']['action'] == '*')
            {
                return true;
            }
            if($permiso['CoPermisos']['controller'] == $this->request->getParam('controller') && $permiso['CoPermisos']['action'] == $this->request->getParam('action'))
            {
                return true;
            }
        }
        return false;
    }

    public function _getPermisosBD()
    {
        $tmp = array();
        $i = 0;
        if($this->request->getSession()->check('Auth.User.co_grupo_id'))
        {
            $CoPermisos = TableRegistry::get('CoPermisos');
            $permisos = $CoPermisos->find('all',['conditions'=>['CoPermisos.id IN (SELECT co_permiso_id FROM co_grupos_co_permisos WHERE co_grupos_co_permisos.co_grupo_id = "'.$this->Auth->user('co_grupo_id').'")'],'fields'=>['CoPermisos.id','CoPermisos.controller','CoPermisos.action']]);

            foreach($permisos as $permiso)
            {
                $tmp[$i]['CoPermisos']['id'] = $permiso->id;
                $tmp[$i]['CoPermisos']['controller'] = $permiso->controller;
                $tmp[$i]['CoPermisos']['action'] = $permiso->action;
                $i++;
            }
        }
        $this->request->getSession()->write('permisos',$tmp);
    }
}

<?php
App::uses('AppController', 'Controller');
/**
 * Services Controller
 *
 * @property Service $Service
 */
class ServicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Service->recursive = 0;
		$this->set('services', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		$this->set('service', $this->Service->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Service->create();
			if ($this->Service->save($this->request->data)) {
				$this->flash(__('Service saved.'), array('action' => 'index'));
			} else {
			}
		}
		$tags = $this->Service->Tag->find('list');
		$users = $this->Service->User->find('list');
		$this->set(compact('tags', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Service->save($this->request->data)) {
				$this->flash(__('The service has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Service->read(null, $id);
		}
		$tags = $this->Service->Tag->find('list');
		$users = $this->Service->User->find('list');
		$this->set(compact('tags', 'users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid service'));
		}
		if ($this->Service->delete()) {
			$this->flash(__('Service deleted'), array('action' => 'index'));
		}
		$this->flash(__('Service was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
